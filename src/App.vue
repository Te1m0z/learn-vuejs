<template>
  <div>
    <label for="ticker">Ticker</label>
    <input type="text" id="ticker" v-model="ticker" v-on:keydown.enter="add" />
    <button @click="add">Click me</button>
    <div
      v-for="(t, idx) in tickers"
      :key="idx"
      @click="sel = t"
      :class="{ red: sel === t }"
    >
      <template class="element">
        <div>{{ t.name }}</div>
        <div>{{ t.price }}</div>
        <button @click.stop="handleDelete(t)">Delete</button>
      </template>
    </div>

    <div v-if="tickers.length === 0">No data</div>

    <div v-if="sel">
      <div>{{ sel.name }}</div>
      <button @click="sel = null">Close</button>
    </div>
  </div>
</template>

<script>
export default {
  name: "App",
  data() {
    return {
      ticker: null,
      tickers: [
        { name: "Valutte", price: "100" },
        { name: "Hommi", price: "-" },
        { name: "Doogcoin", price: "999" }
      ],
      sel: null
    };
  },
  methods: {
    add() {
      this.tickers.push({ name: this.ticker, price: "-" });
      this.ticker = "";
    },
    handleDelete(tickerToRemove) {
      this.tickers = this.tickers.filter((t) => t !== tickerToRemove);
      this.sel = null;
    }
  }
};
</script>

<style src="./app.css"></style>
