<template>
<div>
    <!-- Trigger -->
    <button @click="open"></button>

    <div>
        <!-- Overlay -->
        <transition enter-class="opacity-0" leave-active-class="opacity-0" name="custom">
            <div v-if="isOpen" @click="close" class="fixed inset-0 transition duration-200" style="background: rgba(0,0,0,0.5)"></div>
        </transition>

        <!-- Dialogue -->
        <transition enter-class="opacity-0 scale-90" leave-active-class="opacity-0 scale-90" name="custom">
            <ul v-if="isOpen" @click.stop class="fixed transition duration-200 transform">
                <li>item</li>
                <li>item</li>
                <li>item</li>
            </ul>
        </transition>
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
