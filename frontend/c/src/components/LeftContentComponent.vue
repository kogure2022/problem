<template>
    <div class="leftContent">
      <div class="frame">
        <ul>
          <li v-for="data in dataList" :key="data.value">
            <div class="listContent">
              <div class="listContentText">
                {{data.value}}
              </div>
            </div>
          </li>
        </ul>
      </div>
      <button v-bind:disabled=isButtonDisabled v-on:click="$store.dispatch('update', {value:dataList[dataList.length - 1].value, positionId:2})">右へ移動</button>
    </div>
</template>

<script>
import { computed } from 'vue'
import { useStore } from 'vuex'

export default {
  name: 'listComponent',
  setup () {
    const store = useStore()
    const dataList = computed(() =>
      store.state.datas.filter(data => data.position_id === 1)
    )
    const isButtonDisabled = computed(() =>
      store.state.datas.filter(data => data.position_id === 1).length === 0
    )
    return { dataList, isButtonDisabled }
  }
}
</script>

  <!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.leftContent {
  width: 300px;
  height: 300px;
  display:inline-block;
}
</style>
