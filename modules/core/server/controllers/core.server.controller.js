'use strict';

var validator = require('validator'),
  path = require('path'),
  config = require(path.resolve('./config/config')),
  mongoose = require('mongoose'),
  Study = require('../models/study.server.model.js'),
  Requirement = require('../models/requirement.server.model.js');

  mongoose.connect(config.db.uri);

/**
 * Render the main application page
 */
exports.renderIndex = function (req, res) {
  var safeUserObject = null;
  if (req.user) {
    safeUserObject = {
      displayName: validator.escape(req.user.displayName),
      provider: validator.escape(req.user.provider),
      username: validator.escape(req.user.username),
      created: req.user.created.toString(),
      roles: req.user.roles,
      profileImageURL: req.user.profileImageURL,
      email: validator.escape(req.user.email),
      lastName: validator.escape(req.user.lastName),
      firstName: validator.escape(req.user.firstName),
      additionalProvidersData: req.user.additionalProvidersData
    };
  }

  res.render('modules/core/server/views/index', {
    user: JSON.stringify(safeUserObject),
    sharedConfig: JSON.stringify(config.shared)
  });
};

exports.listResponse = function (req, res) {
  Study.find().exec(function (err, studies) {
    res.json(studies);
  });
};

exports.listRequirements = function (req, res) {
  Requirement.find().exec(function (err, requirements) {
    res.json(requirements);
  });
};

exports.createStudy = function (req, res) {
  var study = new Study(req.body);

  study.save(function(err) {
    if(err) {
      console.log(err);
      res.status(400).send(err);
    } else {
      res.json(study);
    }
  });
};

exports.deleteStudy = function(req, res) {
  var study = req.study;

  study.remove(function(err) {
    if(err) {
      res.status(400).send(err);
    }
    else {
      res.end();
    }
  })

};

exports.studyById = function(req, res, next, id) {
  Study.findById(id).exec(function(err, study) {
    if(err) {
      res.status(400).send(err);
    } else {
      req.study = study;
      next();
    }
  });
};

/**
 * Render the server error page
 */
exports.renderServerError = function (req, res) {
  res.status(500).render('modules/core/server/views/500', {
    error: 'Oops! Something went wrong...'
  });
};

/**
 * Render the server not found responses
 * Performs content-negotiation on the Accept HTTP header
 */
exports.renderNotFound = function (req, res) {

  res.status(404).format({
    'text/html': function () {
      res.render('modules/core/server/views/404', {
        url: req.originalUrl
      });
    },
    'application/json': function () {
      res.json({
        error: 'Path not found'
      });
    },
    'default': function () {
      res.send('Path not found');
    }
  });
};
