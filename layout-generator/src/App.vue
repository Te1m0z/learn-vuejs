<template>
  <div class="container mx-auto">
    <template-form @createMember="createMember" />
    <collegy-members
      :members="members"
      v-model:modal="modalVisible"
      v-model:currentMember="currentEditableMember"
    />
  </div>
  <modal-form v-model:show="modalVisible">
    <template-form
      @editMember="editMember"
      :edit="true"
      :currentEditableMember="currentEditableMember"
    />
  </modal-form>
</template>

<script>
import TemplateForm from "@/components/TemplateForm.vue";
import CollegyMembers from "@/components/CollegyMembers.vue";
import ModalForm from "@/components/ModalForm.vue";

export default {
  components: {
    TemplateForm,
    CollegyMembers,
    ModalForm,
  },
  data() {
    return {
      members: [],
      modalVisible: false,
      currentEditableMember: { id: null },
    };
  },
  methods: {
    createMember(member) {
      this.members.push(member);
    },
    editMember(member) {
      console.log(member.id)
      this.members.map((m) => m.id === member.id ? member : m);
    },
    openDialog() {
      this.modalVisible = true;
      console.log(this.currentEditableMember);
    },
  },
};
</script>
