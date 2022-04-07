<template>
  <form @submit.prevent class="max-w-lg mx-auto">
    <h1 class="my-2 text-center">Создать участника ред. коллегии</h1>
    <form-textarea :id="'fio' + prefix" label="ФИО" v-model="member.fio" />
    <form-textarea
      :id="'address' + prefix"
      label="Адрес"
      v-model="member.address"
    />
    <form-textarea
      :id="'work' + +prefix"
      label="Должность"
      v-model="member.position"
    />
    <form-input
      :id="'img' + +prefix"
      label="Ссылка на картинку"
      v-model="member.img"
    />
    <form-input
      :id="'spin-link' + +prefix"
      label="SPIN:"
      v-model="member.spin.link"
    >
      <input
        type="text"
        :id="'spin-name' + prefix"
        class="border rounded-md border-cyan-400 ml-3 w-1/3"
        placeholder="Сокращ. текст"
        v-model="member.spin.name"
      />
    </form-input>
    <form-input
      :id="'res-link' + prefix"
      label="ResearchedID:"
      v-model="member.researcher.link"
    >
      <input
        type="text"
        :id="'res-name' + prefix"
        class="border rounded-md border-cyan-400 ml-3 w-1/3"
        placeholder="Сокращ. текст"
        v-model="member.researcher.name"
      />
    </form-input>
    <form-input
      :id="'orcid-link' + prefix"
      label="ORCID:"
      v-model="member.orcid.link"
    >
      <input
        type="text"
        :id="'orcid-name' + prefix"
        class="border rounded-md border-cyan-400 ml-3 w-1/3"
        placeholder="Сокращ. текст"
        v-model="member.orcid.name"
      />
    </form-input>
    <form-input
      :id="'scop-link' + prefix"
      label="ScopusID:"
      v-model="member.scopus.link"
    >
      <input
        type="text"
        :id="'scop-name' + prefix"
        class="border rounded-md border-cyan-400 ml-3 w-1/3"
        placeholder="Сокращ. текст"
        v-model="member.scopus.name"
      />
    </form-input>

    <form-input
      :id="'math-link' + prefix"
      label="Math-Net.Ru:"
      v-model="member.mathNet.link"
    >
      <input
        type="text"
        :id="'math-name' + prefix"
        class="border rounded-md border-cyan-400 ml-3 w-1/3"
        placeholder="Сокращ. текст"
        v-model="member.mathNet.name"
      />
    </form-input>

    <form-input
      :id="'author-link' + prefix"
      label="AuthorID (eLibrary.ru):"
      v-model="member.authorID.link"
    >
      <input
        type="text"
        :id="'author-name' + prefix"
        class="border rounded-md border-cyan-400 ml-3 w-1/3 h-fit"
        placeholder="Сокращ. текст"
        v-model="member.authorID.name"
      />
    </form-input>

    <form-input
      :id="'zentr-link' + prefix"
      label="ZentralBlatt:"
      v-model="member.zentralBlatt.link"
    >
      <input
        type="text"
        :id="'zentr-name' + prefix"
        class="border rounded-md border-cyan-400 ml-3 w-1/3"
        placeholder="Сокращ. текст"
        v-model="member.zentralBlatt.name"
      />
    </form-input>

    <form-input
      :id="'google-link' + prefix"
      label="Google Scholar:"
      v-model="member.googleScholar.link"
    >
      <input
        type="text"
        :id="'google-name' + prefix"
        class="border rounded-md border-cyan-400 ml-3 w-1/3"
        placeholder="Сокращ. текст"
        v-model="member.googleScholar.name"
      />
    </form-input>

    <select name="role" v-model="member.role" class="border">
      <option value="redactor">Главный редатор</option>
      <option value="helper">Заместители главного редактора</option>
      <option value="default">Редакционная коллегия</option>
    </select>

    <div class="text-center mt-5">
      <button
        class="result-btn border border-red-500 py-1 px-4"
        @click="createMember"
      >
        Готово
      </button>
    </div>
  </form>
</template>

<script>
import FormTextarea from "@/components/FormTextarea.vue";
import FormInput from "@/components/FormInput.vue";
export default {
  props: {
    prefix: {
      type: String,
      required: false,
      default: "",
    },
    edit: {
      type: Boolean,
      default: false,
    },
    currentEditableMember: {
      type: Object,
      default: new Object({}),
    },
  },
  components: {
    FormTextarea,
    FormInput,
  },
  data() {
    return {
      member: {
        id: null,
        fio: this.currentEditableMember.fio,
        address: this.currentEditableMember.address,
        position: this.currentEditableMember.position,
        img: "",
        role: "default",
        spin: {
          link: "",
          name: "",
        },
        researcher: {
          link: "",
          name: "",
        },
        orcid: {
          link: "",
          name: "",
        },
        scopus: {
          link: "",
          name: "",
        },
        mathNet: {
          link: "",
          name: "",
        },
        authorID: {
          link: "",
          name: "",
        },
        zentralBlatt: {
          link: "",
          name: "",
        },
        googleScholar: {
          link: "",
          name: "",
        },
      },
    };
  },
  methods: {
    createMember() {
      this.member.id = Date.now();
      this.$emit("createMember", this.member);
      this.$emit("editMember", this.member);
      this.member = {
        id: null,
        fio: "",
        address: "",
        position: "",
        role: "default",
        img: "",
        spin: {
          link: "",
          name: "",
        },
        researcher: {
          link: "",
          name: "",
        },
        orcid: {
          link: "",
          name: "",
        },
        scopus: {
          link: "",
          name: "",
        },
        mathNet: {
          link: "",
          name: "",
        },
        authorID: {
          link: "",
          name: "",
        },
        zentralBlatt: {
          link: "",
          name: "",
        },
        googleScholar: {
          link: "",
          name: "",
        },
      };
    },
    updateField(event) {
      this.member.spin.name = event.target.value;
    },
  },
};
</script>
