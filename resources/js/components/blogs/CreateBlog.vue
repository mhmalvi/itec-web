<template>
  <form>
    <div class="row">
      <div class="col-md-8">
        <div class="form-group">
          <label for="title">
            Blog Title <span class="text-danger">*</span></label
          >
          <input
            type="text"
            class="form-control"
            id="title"
            placeholder="Blog title is required ..."
          />
        </div>
        <div class="form-group">
          <label for="slug">Blog's Slug</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="slug-url"
                >https://itecounsel.com/blog/</span
              >
            </div>
            <input
              type="text"
              class="form-control"
              id="slug"
              aria-describedby="slug-url"
              placeholder="Slug is a friendly version of your url ..."
            />
          </div>
        </div>

        <div class="form-group">
          <label for="description">Description</label>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <div class="form-group">
              <label for="slug">Post Category</label>
              <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</template>
<script>
export default {};
</script>
<style>
.ql-container {
  height: 500px !important;
}
</style>