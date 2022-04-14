<template>
  <div>
    <div :class="mainRedactor">Главный редактор</div>

    <template v-for="m in mainRedactors" :key="m.id">
      <div :class="classWrapper">
        <button
          @click="$emit('edit', m)"
          class="absolute right-0 text-green-300"
        >
          Edit
        </button>
        <button
          @click="$emit('delete', m)"
          class="absolute right-0 text-green-300 bottom-0"
        >
          Delete
        </button>
        <div class="flex flex-col sm:flex-row">
          <img
            class="
              w-full
              h-32
              sm:w-32 sm:h-32
              md:w-36 md:h-36
              lg:w-48 lg:h-48
              object-center object-contain
              mb-5
              sm:mb-0
            "
            :src="
              m.img != ''
                ? m.img
                : 'https://akmepsy.sgu.ru/sites/ama.sgu.ru/files/user-pictures/user-pictures.jpg'
            "
            alt="#"
          />
          <div :class="classRightColumn">
            <p :class="classMemberName">{{ m.fio }}</p>
            <p :class="classMemberAddress">
              <a href="#">
                {{ template === "second" && "(" }}{{ m.address
                }}{{ template === "second" && ")" }}
              </a>
            </p>
            <p class="text-sm mt-2 sm:text-base md:text-lg w-full">
              {{ m.position }}
            </p>
            <div :class="classRightLinks">
              <div v-if="template === 'second'" class="w-1/2">
                Scopus Author ID:
                <a :href="m.scopus.link" :class="classRightLink">{{
                  m.scopus.name
                }}</a>
              </div>
              <div class="w-1/2">
                SPIN:
                <a :href="m.spin.link" :class="classRightLink">{{
                  m.spin.name
                }}</a>
              </div>
              <div class="w-1/2">
                ORCID:
                <a :href="m.orcid.link" :class="classRightLink">{{
                  m.orcid.name
                }}</a>
              </div>
              <div class="w-1/2">
                ResearcherID:
                <a :href="m.researcher.link" :class="classRightLink">{{
                  m.researcher.name
                }}</a>
              </div>
              <div class="w-1/2">
                ScopusID:
                <a :href="m.scopus.link" :class="classRightLink">{{
                  m.scopus.name
                }}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </template>

    <div class="my-6 font-bold text-base md:text-xl pl-3">
      Заместитель главного редактора
    </div>

    <template v-for="m in helpRedactors" :key="m.id">
      <div :class="classWrapper">
        <button
          @click="$emit('edit', m)"
          class="absolute right-0 text-green-300"
        >
          Edit
        </button>
        <button
          @click="$emit('delete', m)"
          class="absolute right-0 text-green-300 bottom-0"
        >
          Delete
        </button>
        <div class="flex flex-col sm:flex-row">
          <img
            class="
              w-full
              h-32
              sm:w-32 sm:h-32
              md:w-36 md:h-36
              lg:w-48 lg:h-48
              object-center object-contain
              mb-5
              sm:mb-0
            "
            :src="
              m.img != ''
                ? m.img
                : 'https://akmepsy.sgu.ru/sites/ama.sgu.ru/files/user-pictures/user-pictures.jpg'
            "
            alt="#"
          />
          <div :class="classRightColumn">
            <p :class="classMemberName">{{ m.fio }}</p>
            <p class="mt-2 underline underline-offset-2">
              <a href="#">{{ m.address }}</a>
            </p>
            <p class="text-sm mt-2 sm:text-base md:text-lg w-full">
              {{ m.position }}
            </p>
            <div
              class="
                flex flex-wrap
                mt-2
                text-base
                sm:text-base
                md:text-xl
                lg:text-2xl
              "
            >
              <div class="w-1/2">
                SPIN:
                <a :href="m.spin.link" :class="classRightLink">{{
                  m.spin.name
                }}</a>
              </div>
              <div class="w-1/2">
                ORCID:
                <a :href="m.orcid.link" :class="classRightLink">{{
                  m.orcid.name
                }}</a>
              </div>
              <div class="w-1/2">
                ResearcherID:
                <a :href="m.researcher.link" :class="classRightLink">{{
                  m.researcher.name
                }}</a>
              </div>
              <div class="w-1/2">
                ScopusID:
                <a :href="m.scopus.link" :class="classRightLink">{{
                  m.scopus.name
                }}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </template>

    <div class="my-6 font-bold text-base italic md:text-xl pl-3">
      Редакционная коллегия
    </div>

    <template v-for="m in defaultRedactors" :key="m.id">
      <div :class="classWrapper">
        <button
          @click="$emit('edit', m)"
          class="absolute right-0 text-green-300"
        >
          Edit
        </button>
        <button
          @click="$emit('delete', m)"
          class="absolute right-0 text-green-300 bottom-0"
        >
          Delete
        </button>
        <div class="flex flex-col sm:flex-row">
          <img
            class="
              w-full
              h-32
              sm:w-32 sm:h-32
              md:w-36 md:h-36
              lg:w-48 lg:h-48
              object-center object-contain
              mb-5
              sm:mb-0
            "
            :src="
              m.img != ''
                ? m.img
                : 'https://akmepsy.sgu.ru/sites/ama.sgu.ru/files/user-pictures/user-pictures.jpg'
            "
            alt="#"
          />
          <div :class="classRightColumn">
            <p :class="classMemberName">{{ m.fio }}</p>
            <p class="mt-2 underline underline-offset-2">
              <a href="#">{{ m.address }}</a>
            </p>
            <p class="text-sm mt-2 sm:text-base md:text-lg w-full">
              {{ m.position }}
            </p>
            <div
              class="
                flex flex-wrap
                mt-2
                text-base
                sm:text-base
                md:text-xl
                lg:text-2xl
              "
            >
              <div class="w-1/2">
                SPIN:
                <a :href="m.spin.link" :class="classRightLink">{{
                  m.spin.name
                }}</a>
              </div>
              <div class="w-1/2">
                ORCID:
                <a :href="m.orcid.link" :class="classRightLink">{{
                  m.orcid.name
                }}</a>
              </div>
              <div class="w-1/2">
                ResearcherID:
                <a :href="m.researcher.link" :class="classRightLink">{{
                  m.researcher.name
                }}</a>
              </div>
              <div class="w-1/2">
                ScopusID:
                <a :href="m.scopus.link" :class="classRightLink">{{
                  m.scopus.name
                }}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </template>
  </div>
</template>

<script>
export default {
  props: {
    members: Array,
    template: String,
  },
  computed: {
    mainRedactors() {
      return this.members.filter(({ role }) => role == "redactor");
    },
    helpRedactors() {
      return this.members.filter(({ role }) => role == "helper");
    },
    defaultRedactors() {
      return this.members.filter(({ role }) => role == "default");
    },
    mainRedactor() {
      switch (this.template) {
        case "first":
          return "my-6 font-bold text-base md:text-xl pl-3";
        case "second":
          return "my-6 text-base md:text-2xl pl-3 text-sky-600";
        default:
          return "";
      }
    },
    classWrapper() {
      switch (this.template) {
        case "first":
          return "my-2 md:my-5 temp-el relative";
        case "second":
          return "my-2 md:my-5 temp-el relative";
        default:
          return "";
      }
    },
    classRightColumn() {
      switch (this.template) {
        case "first":
          return "sm:ml-4 p-0 sm:p-3 w-full text-center sm:text-left";
        case "second":
          return "sm:ml-16 p-0 sm:p-3 w-full text-center sm:text-left";
        default:
          return "";
      }
    },
    classMemberName() {
      switch (this.template) {
        case "first":
          return "text-lg lg:text-xl font-bold";
        case "second":
          return "text-lg lg:text-2xl inline";
        default:
          return "";
      }
    },
    classMemberAddress() {
      switch (this.template) {
        case "first":
          return "mt-2 underline underline-offset-2";
        case "second":
          return "mt-0 inline ml-3 text-lg lg:text-2xl";
        default:
          return "";
      }
    },
    classRightLinks() {
      switch (this.template) {
        case "first":
          return "flex flex-wrap mt-2 text-base sm:text-base md:text-xl lg:text-2xl";
        case "second":
          return "flex flex-col mt-6 text-base font-bold";
        default:
          return "";
      }
    },
    classRightLink() {
      switch (this.template) {
        case "first":
          return "font-bold underline underline-offset-2";
        case "second":
          return "font-normal text-sky-500";
        default:
          return "";
      }
    },
  },
};
</script>

<style>
.members-list {
  border: 1px solid green;
  border-radius: 10px;
}
</style>