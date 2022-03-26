<template>
  <div>
    <label for="ticker">Ticker</label>
    <input type="text" id="ticker" v-model="ticker" v-on:keydown.enter="add" />
    <button @click="add">Click me</button>
    <div v-for="t in tickers" :key="t.name">
      <div class="element">
        <div>{{ t.name }}</div>
        <div>{{ t.price }}</div>
        <button @click="handleDelete(t)">Delete</button>
      </div>
    </div>

    <div v-if="tickers.length === 0">No data</div>
  </div>
</template>

<script>
export default {
  name: "App",
  data() {
    return {
      ticker: "da",
      tickers: [
        { name: "Valutte", price: "100" },
        { name: "Hommi", price: "-" },
        { name: "Doogcoin", price: "999" }
      ]
    };
  },
  methods: {
    add() {
      this.tickers.push({ name: this.ticker, price: "-" });
      this.ticker = "";
    },
    handleDelete(tickerToRemove) {
      this.tickers = this.tickers.filter((t) => t !== tickerToRemove);
    }
  }
};
</script>

<style src="./app.css"></style>
