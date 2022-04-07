<template>
  <div>
    <div class="my-6 font-bold text-base md:text-xl pl-3">Главный редактор</div>
    <template v-for="m in mainRedactors" :key="m.id">
      <div class="my-2 md:my-5 temp-el relative">
        <button
          @click="openModal(m)"
          class="absolute right-0 text-green-300 border p-2"
        >
          Edit
        </button>
        <div class="flex flex-col sm:flex-row border">
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
          <div class="sm:ml-4 p-0 sm:p-3 w-full text-center sm:text-left">
            <p class="text-lg lg:text-xl font-bold">{{ m.fio }}</p>
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
                <a
                  :href="m.spin.link"
                  class="font-bold underline underline-offset-2"
                  >{{ m.spin.name }}</a
                >
              </div>
              <div class="w-1/2">
                ORCID:
                <a
                  :href="m.orcid.link"
                  class="font-bold underline underline-offset-2"
                  >{{ m.orcid.name }}</a
                >
              </div>
              <div class="w-1/2">
                ResearcherID:
                <a
                  :href="m.researcher.link"
                  class="font-bold underline underline-offset-2"
                  >{{ m.researcher.name }}</a
                >
              </div>
              <div class="w-1/2">
                ScopusID:
                <a
                  :href="m.scopus.link"
                  class="font-bold underline underline-offset-2"
                  >{{ m.scopus.name }}</a
                >
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
      <div class="my-2 md:my-5 temp-el">
        <div class="flex flex-col sm:flex-row border">
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
          <div class="sm:ml-4 p-0 sm:p-3 w-full text-center sm:text-left">
            <p class="text-lg lg:text-xl font-bold">{{ m.fio }}</p>
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
                <a
                  :href="m.spin.link"
                  class="font-bold underline underline-offset-2"
                  >{{ m.spin.name }}</a
                >
              </div>
              <div class="w-1/2">
                ORCID:
                <a
                  :href="m.orcid.link"
                  class="font-bold underline underline-offset-2"
                  >{{ m.orcid.name }}</a
                >
              </div>
              <div class="w-1/2">
                ResearcherID:
                <a
                  :href="m.researcher.link"
                  class="font-bold underline underline-offset-2"
                  >{{ m.researcher.name }}</a
                >
              </div>
              <div class="w-1/2">
                ScopusID:
                <a
                  :href="m.scopus.link"
                  class="font-bold underline underline-offset-2"
                  >{{ m.scopus.name }}</a
                >
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
      <div class="my-2 md:my-5 temp-el">
        <div class="flex flex-col sm:flex-row border">
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
          <div class="sm:ml-4 p-0 sm:p-3 w-full text-center sm:text-left">
            <p class="text-lg lg:text-xl font-bold">{{ m.fio }}</p>
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
                <a
                  :href="m.spin.link"
                  class="font-bold underline underline-offset-2"
                  >{{ m.spin.name }}</a
                >
              </div>
              <div class="w-1/2">
                ORCID:
                <a
                  :href="m.orcid.link"
                  class="font-bold underline underline-offset-2"
                  >{{ m.orcid.name }}</a
                >
              </div>
              <div class="w-1/2">
                ResearcherID:
                <a
                  :href="m.researcher.link"
                  class="font-bold underline underline-offset-2"
                  >{{ m.researcher.name }}</a
                >
              </div>
              <div class="w-1/2">
                ScopusID:
                <a
                  :href="m.scopus.link"
                  class="font-bold underline underline-offset-2"
                  >{{ m.scopus.name }}</a
                >
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
    members: {
      type: Array,
    },
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
  },
  methods: {
    openModal(member) {
      this.$emit("update:modal", true);
      this.$emit("update:currentMember", member);
    },
  },
};
</script>
