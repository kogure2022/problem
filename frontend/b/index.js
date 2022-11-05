Vue.config.productionTip = false
var app = new Vue({
  el: '#app',
  data: {
    textBoxValue: '',
    list: [
      { text: 'Apple' },
      { text: 'Grape' },
      { text: 'Strawberry' },
    ]
  },
  methods: {
    /**
     * リスト要素を追加してテキストボックスをリセットする
     */
    addText: function () {
      this.list.push({
        text: this.textBoxValue
      })
      this.textBoxValue = ''
    },
    /**
     *  リストから指定された要素を削除する
     * 
     * @param {*} index 
     */
    deleteText: function (index) {
      this.list.splice(index, 1)
    }
  }
})