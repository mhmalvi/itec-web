const { default: axios } = require("axios");

class BlogCategory {
    static async getRaw() {
        return new Promise((resolve, reject) => {
            axios
                .get("/admin/categories/raw")
                .then((res) => {
                    resolve(res.data);
                })
                .catch((err) => {
                    reject(err);
                });
        });
    }
}

export default BlogCategory;
