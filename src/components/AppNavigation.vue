<template>
  <header class="bg-emerald-300 h-16 flex items-center">
    <div class="container mx-auto flex items-center justify-between">
      <div>
        <router-link to="/dw" class="text-2xl">Tailwind UI</router-link>
      </div>
      <nav class="text-xl">
        <router-link to="/">Home</router-link>
        <router-link to="/elements" class="ml-7">Elements</router-link>
        <router-link to="/forms" class="ml-7">Forms</router-link>
        <router-link to="/ui" class="ml-7">UI</router-link>
      </nav>
    </div>
  </header>
</template>