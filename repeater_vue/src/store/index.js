import { createStore } from 'vuex'
import rootMutations from './mutations.js';
import rootActions from './actions.js';
import rootGetters from './getters.js';

import optionsModule from './options/index.js'
import learningModule from './learning/index.js'
import courseModule from './courses/index.js'
import lessonModule from './lessons/index.js'
import repeatModule from './repeat/index.js'
import cardModule from './cards/index.js'

export default createStore({
  modules: {
    option    :   optionsModule,
    learning  :   learningModule,
    course    :   courseModule,
    lesson    :   lessonModule,
    repeat    :   repeatModule,
    card      :   cardModule
  },
  state: {
    isLoggedIn: false,
    userId: null,
    cos: 'proba stora',
    periodForEasyWord   :   5,
    maxNumTries         :   3,
    todayDate           :   null
  },
  mutations :   rootMutations,
  actions   :   rootActions,
  getters   :   rootGetters
})
