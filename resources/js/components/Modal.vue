<template>
<div class="modal">
    <!-- Trigger -->
    <div @click="open"><slot name="trigger"></slot></div>

    <div v-if="isOpen" class="container">
        <!-- Overlay -->
        <div v-if="isOpen" @click="close" class="overlay"></div>

        <!-- Dialogue -->
        <div v-if="isOpen" @click.stop class="content">
            <slot name="dialogue"></slot>
        </div>
    </div>
</div>
</template>

<script>
export default {
  data() {
      return {
          isOpen: false,
      }
  },
  mounted() {
      document.addEventListener('keydown', (e) => {
        if (this.isOpen && e.keyCode == 27) {
            this.close();
        }
      })
  },
  methods: {
      open() {
          this.isOpen = true
      },
      close() {
          this.isOpen = false
      }
  }
};
</script>
