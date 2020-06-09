<template>
<div>
  <!-- ログイン済みだといいね可能 -->
  <a class="ml-2 pt-1 d-block likes" v-if="loginFlg" @click="addLike">
    <svg version="1.1" id="_x32_" :class="{heart: isActive}" xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" fill="#4B4B4B"
      style="width: 30px; height: 30px; opacity: 1;" xml:space="preserve">
      <g>
        <path class="st0"
          d="M456.795,27.9c-74.557-59.281-178.762-17.77-200.801,65.114C233.954,10.13,129.758-31.381,55.202,27.9
        c-71.446,56.823-65.676,169.955,4.27,260.67c64.627,83.824,165.602,164.591,192.814,220.66c1.077,2.236,3.506,2.77,3.709,2.77
        c0.211,0,2.641-0.534,3.727-2.77c27.192-56.069,128.168-136.836,192.804-220.66C522.48,197.856,528.24,84.723,456.795,27.9z">
        </path>
      </g>
    </svg>
    <span class="pl-2">{{likeCount}}</span>
  </a>
  <!-- 未ログインだといいね不可 -->
  <div class="ml-2 pt-1" v-else>
    <svg version="1.1" id="_x32_" class="" xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" fill="#4B4B4B"
      style="width: 30px; height: 30px; opacity: 1;" xml:space="preserve">
      <g>
        <path class="st0"
          d="M456.795,27.9c-74.557-59.281-178.762-17.77-200.801,65.114C233.954,10.13,129.758-31.381,55.202,27.9
        c-71.446,56.823-65.676,169.955,4.27,260.67c64.627,83.824,165.602,164.591,192.814,220.66c1.077,2.236,3.506,2.77,3.709,2.77
        c0.211,0,2.641-0.534,3.727-2.77c27.192-56.069,128.168-136.836,192.804-220.66C522.48,197.856,528.24,84.723,456.795,27.9z">
        </path>
      </g>
    </svg>
    <span class="pl-2">{{likeCount}}</span>
  </div>
</div>
</template>

<script>
export default {
  props: ["answer", "loginFlg", "userId"],
  data: function() {
    return {
      isActive: false,
      likeCount: this.answer.likes.length
    };
  },
  mounted() {
    this.activeFunc();
  },
  methods: {
    activeFunc() {
      let that = this;
      // お気に入りレコードからユーザーが一致するか確認
      this.answer.likes.forEach(function(val) {
        // 一致していたら、isActiveをtrueにする
        if (val.user_id == that.userId) {
          that.isActive = true;
        }
      });
    },
    addLike() {
      let that = this;
      axios
        .post("/child-dev-bbs/answer/like", {
          id: this.answer.id
        })
        .then(response => {
          // likeCountを更新
          that.likeCount = response.data;
          // isActiveを反転
          that.isActive = !that.isActive;
        })
        .catch(function(error) {
          if (error.response) {
            // The request was made and the server responded with a status code
            // that falls out of the range of 2xx
            // console.log(error.response.data);
            // console.log(error.response.status); // 例：400
            // console.log(error.response.statusText); // Bad Request
            // console.log(error.response.headers);
          } else if (error.request) {
            // The request was made but no response was received
            // `error.request` is an instance of XMLHttpRequest in the browser and an instance of
            // http.ClientRequest in node.js
            // console.log(error.request);
          } else {
            // Something happened in setting up the request that triggered an Error
            // console.log("Error", error.message);
          }
          // console.log(error.config);
        });
    }
  }
  // デバック用
  // watch: {
  //   likeCount: function(newValue, oldValue) {
  //     console.log("newVlaue:" + newValue);
  //     console.log("oldVlaue:" + oldValue);
  //   }
  // }
};
</script>
