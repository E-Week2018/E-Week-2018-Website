var mongoose = require('mongoose'),
  Schema = mongoose.Schema;

var studySchema = new Schema({
  study_name: {
    type: String
  },
  lar_consent: {
    type: Boolean
  },
  age_lower_bound: {
    type: Number
  },
  age_upper_bound: {
    type: Number
  },
  tia_diagnosis: {
    type: Boolean
  },
  hemorrhage: {
    type: Boolean
  },
  nihss_lower_bound: {
    type: Number
  },
  nihss_upper_bound: {
    type: Number
  },
  mrs_lower_bound: {
    type: Number
  },
  mrs_upper_bound: {
    type: Number
  },


});

var Study = mongoose.model('Study', studySchema);

module.exports = Study;
