<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>About Us</h3>
                        <div class="m-3">
                            <div class="row">
                                <form @submit.prevent="rubah()">
                                    <div
                                        v-for="form in abouts.data"
                                        :key="form.id"
                                    >
                                        <div class="form-group row">
                                            <label
                                                class="col-sm-2 col-form-label"
                                            >
                                                Judul :</label
                                            >
                                            <div class="col-sm-10">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Input Here"
                                                    v-model="form.judul"
                                                />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label
                                                class="col-sm-2 col-form-label"
                                            >
                                                Gambar :</label
                                            >
                                            <div class="col-sm-10">
                                                <input
                                                    type="file"
                                                    class="form-control"
                                                    @change="onChange"
                                                    name="gambar"
                                                    id="gambar"
                                                />
                                                <div
                                                    class="alert-danger errors"
                                                    v-if="errors.gambar"
                                                >
                                                    {{ errors.gambar[0] }}
                                                </div>
                                                <br />
                                                <img
                                                    v-bind:src="
                                                        priviewimage == null
                                                            ? '../' +
                                                              form.gambar
                                                            : priviewimage
                                                    "
                                                    width="150px"
                                                    height="150pxE"
                                                />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label
                                                class="col-sm-2 col-form-label"
                                            >
                                                Isi :</label
                                            >
                                            <div class="col-sm-10">
                                                <textarea
                                                    class="form-control"
                                                    id="exampleFormControlTextarea3"
                                                    rows="7"
                                                    >{{ form.isi }}</textarea
                                                >
                                            </div>
                                        </div>
                                        <div class="col-md-2 mt-2">
                                            <button
                                                type="submit"
                                                class="btn btn-primary form-control"
                                            >
                                                <i
                                                    v-show="loading"
                                                    class="fa fa-spinner fa-spin"
                                                ></i>
                                                <a>Rubah</a>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <vue-progress-bar></vue-progress-bar>
        </div>
    </div>
</template>
<script>
import Form from "vform";
export default {
    data() {
        return {
            loading: false,
            disabled: false,
            abouts: {},
            priviewimage: null,
            errors: {},
            form: new Form({
                id: "",
                judul: "",
                isi: "",
                gambar: "",
            }),
        };
    },
    methods: {
        loadData() {
            this.$Progress.start();
            axios
                .get(`../api/about`)
                .then((data) => {
                    this.abouts = data;
                    this.$Progress.finish();
                })
                .catch((e) => {
                    console.log(e);
                    this.$Progress.fail();
                });
        },
        onChange(e) {
            console.log(e.target.files[0]);
            // let files = e.target.files[0];
            // this.priviewimage = URL.createObjectURL(files);
            // this.form.gambar = files;
            this.form.gambar = e.target.files[0];
            let reader = new FileReader();
            reader.addEventListener(
                "load",
                function () {
                    this.priviewimage = reader.result;
                }.bind(this),
                false
            );
            if (this.form.gambar) {
                if (/\.(jpe?g|png|gif)$/i.test(this.form.gambar.name)) {
                    reader.readAsDataURL(this.form.gambar);
                }
            }
        },
        rubah() {
            this.loading = true;
        },
    },
    created() {
        this.loadData();
        Fire.$on("refreshData", () => {
            this.loadData();
        });
    },
};
</script>
