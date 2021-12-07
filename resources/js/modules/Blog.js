import axios from "axios";

class Blog {
    static async get(slug) {
        return new Promise((resolve, reject) => {
            axios
                .get("/admin/blogs/" + slug + "/raw")
                .then((res) => {
                    resolve(res.data.data);
                })
                .catch((err) => {
                    reject(err);
                });
        });
    }
}

export default Blog;
