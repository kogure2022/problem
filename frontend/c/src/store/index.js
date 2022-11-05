import { createStore } from 'vuex'
const dataList = [
  {
    value: 'Apple', position_id: 1
  },
  {
    value: 'Grape', position_id: 1
  },
  {
    value: 'Strawberry', position_id: 1
  },
  {
    value: 'Cherry', position_id: 1
  },
  {
    value: 'Plum', position_id: 1
  },
  {
    value: 'Watermelon', position_id: 2
  },
  {
    value: 'Banana', position_id: 2
  },
  {
    value: 'Peach', position_id: 2
  }

]
export default createStore({
  state: {
    datas: dataList
  },
  getters: {
  },
  mutations: {
    update (state, { value, positionId }) {
      const target = state.datas.findIndex(e => e.value === value)
      const tmp = state.datas.find(e => e.value === value)
      tmp.position_id = positionId
      state.datas.splice(target, 1)
      state.datas.push(tmp)
    }
  },
  actions: {
    update (context, { value, positionId }) {
      context.commit('update', { value: value, positionId: positionId })
    }
  },
  modules: {
  }
})
