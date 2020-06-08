<template>
  <div>
    <section class="btn-group d-flex col-6 mx-auto my-4 p-4" role="group">
      <router-link :to="{name: 'newIndex'}" class="btn btn-outline-info w-100  d-flex align-items-center">
        <span class="w-100">新着</span>
      </router-link>
      <router-link :to="{name: 'tagIndex'}" class="btn btn-info w-100 d-flex align-items-center">
        <span class="w-100">タグ</span>
      </router-link>
    </section>

    <h5 class="text-info mb-4">タグを選択してください</h5>

    <section class="container mb-4">
      <div class="row mx-1 my-3">
        <div class="m-3" v-for="tag in tags" :key="tag.id">
          <h2 class="btn btn-info text-nowrap d-block" @click="tagName = tag.name ">{{tag.name}}</h2>
        </div>
      </div>
    </section>

    <section class="container">
      <!-- <div class="row mb-4"> -->
      <transition-group name="item" tag="div" class="row mb-4" mode="out-in" appear>

        <div v-for="question in sortQuestions" :key="question" class="col-lg-6 mb-4">
          <div class="card">
            <div class="card-body">
              <a :href=" '/questions/' + question.id + '/show'" class="h5 card-title text-left">{{question.title}}</a>
              <p class="card-text text-left">{{question.detail.substr(0, 30)}}...</p>
              <div class="text-left">
                <span v-for="tag in question.tags" :key="tag.id" class="badge badge-info mr-2 p-2">{{tag.name}}</span>
              </div>
              <div class="text-secondary d-flex justify-content-between mt-3">
                <p class="a-count">回答 <span>{{ question.answers.length }}</span></p>
                <time>{{ question.created_at.substr(0, 16) }}</time>
              </div>
            </div>
          </div>
        </div>
      </transition-group>
      <!-- </div> -->
    </section>
  </div>
</template>

<script>
export default {
  props: ["questions", "tags"],
  data: function() {
    return {
      tagName: ""
    };
  },
  computed: {
    sortQuestions: function() {
      let sortName = this.tagName;
      let result = this.questions;
      if (sortName) {
        result = [];
        this.questions.forEach(function(val) {
          val.tags.forEach(function(key) {
            if (key.name.indexOf(sortName) !== -1) {
              // console.log(val);
              result.push(val);
            }
          });
        });
      }
      return result;
    }
  },
  watch: {
    tagNum: function(newValue) {
      // console.log(newValue);
    }
  }
};
</script>
