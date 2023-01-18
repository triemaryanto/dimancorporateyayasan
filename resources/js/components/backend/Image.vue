<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Laravel Vue JS Image Upload - ItSolutionStuff.com
                    </div>

                    <div class="card-body">
                        <form
                            ref="anyName"
                            @submit.prevent="simpanData()"
                            enctype="multipart/form-data"
                        >
                            <div class="modal-body">
                                <div class="form-group">
                                    <input
                                        type="text"
                                        v-model="form.judul"
                                        class="form-control"
                                        placeholder="Judul Berita"
                                        required
                                    />
                                    <div
                                        class="alert-danger errors"
                                        v-if="errors.judul"
                                    >
                                        {{ errors.judul[0] }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea
                                        class="form-control"
                                        v-model="form.isi_berita"
                                    ></textarea>
                                    <div
                                        class="alert-danger errors"
                                        v-if="errors.isi_berita"
                                    >
                                        {{ errors.isi_berita[0] }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <img :src="priviewimage" width="150px" />
                                    <input
                                        type="file"
                                        class="form-control"
                                        @change="onChange"
                                    />
                                </div>
                                <div class="form-group">
                                    <select
                                        class="form-control control2"
                                        v-model="form.kategori_id"
                                        required
                                    >
                                        <option value>Pilih Wilayah</option>
                                        <option
                                            v-for="a in kategoris"
                                            :key="a.id"
                                            :value="a.id"
                                        >
                                            {{ a.nama_kategori }}
                                        </option>
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button
                                        type="button"
                                        class="btn btn-secondary"
                                        data-bs-dismiss="modal"
                                    >
                                        Close
                                    </button>
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                    >
                                        <i
                                            v-show="loading"
                                            class="fa fa-spinner fa-spin"
                                        ></i>
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
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
    mounted() {
        console.log("Component mounted.");
    },

    data() {
        return {
            loading: false,
            disabled: false,
            statusmodal: false,
            kategoris: {},
            errors: {},
            form: new Form({
                id: "",
                judul: "",
                isi_berita: "",
                id_kategori: "",
                gambar: "",
            }),

            priviewimage: null,
        };
    },

    methods: {
        loadData() {
            axios
                .get(`../api/data-kategori`)
                .then(({ data }) => (this.kategoris = data));
        },
        onChange(e) {
            console.log(e.target.files[0]);
            let files = e.target.files[0];
            this.priviewimage = URL.createObjectURL(files);
            this.form.gambar = files;
        },
        simpanData() {
            this.loading = true;
            this.disabled = true;
            const config = {
                header: { content_type: "multipart/form-data" },
            };

            let data = new FormData();
            data.append("judul", this.form.judul);
            data.append("isi_berita", this.form.isi_berita);
            data.append("gambar", this.form.gambar);
            data.append("kategori_id", this.form.kategori_id);
            axios.post(`../api/berita`, data, config).then((response) => {
                console.log(response);
            });
        },
    },
    created() {
        this.loadData();
    },
};
</script>
