<template>
  <div>
    <h2>Articles</h2>
  </div>
</template>

<script>
export default {
  data() {
    return {
      articles: [],
      article: {
        id: "",
        title: "",
        body: ""
      },
      article_id: "",
      pagination: {},
      edit: false
    };
  },
  created() {
    this.fetchArticles();
  },

  method: {
    fetchArticles() {
      fecth("api/create")
        .then((res = res.json()))
        .then(res);
    }
  }
};
</script>
