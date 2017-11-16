var mongoose = require('mongoose'),
  Schema = mongoose.Schema;

var requirementSchema = new Schema({
  requirementName: {
    type: String
  },
  databaseName: {
    type: String
  },
  typeOfRequirement: {
    type: String
  },
  associatedQuestion: {
    type: String
  }
});

var Requirement = mongoose.model('Requirement', requirementSchema);

module.exports = Requirement;
