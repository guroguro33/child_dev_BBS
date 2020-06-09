<template>
  <div>
    <section class="btn-group d-flex col-6 mx-auto my-4 p-4" role="group">
      <router-link :to="{name: 'newIndex'}" class="btn btn-info w-100  d-flex align-items-center">
        <span class="w-100">新着</span>
      </router-link>
      <router-link :to="{name: 'tagIndex'}" class="btn btn-outline-info w-100 d-flex align-items-center">
        <span class="w-100">タグ</span>
      </router-link>
    </section>
    
    <section class="container">

        <transition-group name="item" tag="div" class="row" mode="in-out" appear>

        <div v-for="question in questions" :key="question.id" class="col-lg-6 mb-4">
          <div class="card">
            <div class="card-body">
              <a :href=" '/questions/' + question.id + '/show'" class="h5 card-title text-left">{{question.title}}</a>
              <p class="card-text text-left">{{question.detail.substr(0, 120)}}...</p>
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
    
    </section>
  </div>
</template>

<script>
export default {
  props: ["questions"],
  methods: {
    getDate(date) {
      return date.substr(0, 16);
    }
  }
};
</script>
