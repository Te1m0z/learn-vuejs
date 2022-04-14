<template>
  <div class="container mx-auto">
    <members-form @create="createMember" @save="saveMember" />
    <div class="text-center mt-2">
      <select class="border" v-model="template">
        <option value="first">Первый</option>
        <option value="second">Второй</option>
        <option value="third">Третий</option>
      </select>
    </div>
    <members-list
      :members="members"
      @edit="editMember"
      @delete="deleteMember"
      :template="template"
    />
    <my-modal v-model:show="modalVisible">
      <members-form
        @save="saveMember"
        :currentMember="currentMember"
        :edit="edit"
        prefix="modal_"
      />
    </my-modal>
  </div>
</template>

<script>
import MembersList from "@/components/MembersList.vue";
import MembersForm from "@/components/MembersForm.vue";
import MyModal from "@/components/MyModal.vue";

export default {
  data() {
    return {
      members: [],
      edit: false,
      currentMember: {},
      modalVisible: false,
      template: 'first' 
    };
  },
  components: {
    MembersList,
    MembersForm,
    MyModal,
  },
  methods: {
    createMember(m) {
      this.members.push(m);
    },
    saveMember(updatedMember) {
      this.modalVisible = false;
      this.members = this.members.map((m) =>
        m.id === updatedMember.id ? updatedMember : m
      );
      this.currentMember = null;
    },
    editMember(m) {
      this.currentMember = m;
      this.modalVisible = true;
      this.edit = true;
    },
    deleteMember(m) {
      let index = this.members.findIndex((o) => o.id === m.id);
      if (index !== -1) this.members.splice(index, 1);
    },
  },
};
</script>
