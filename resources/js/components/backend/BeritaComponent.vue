<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Data Berita</h3>
                        <div class="card-tools">
                            <button class="btn btn-success" @click="showModal">
                                Tambah Berita
                            </button>
                            <!-- Modal -->
                            <div
                                class="modal fade"
                                id="modalmuncul"
                                tabindex="-1"
                                aria-labelledby="modalmuncul"
                                aria-hidden="true"
                            >
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5
                                                class="modal-title"
                                                id="exampleModalLabel"
                                                v-show="!statusmodal"
                                            >
                                                Tambah Berita
                                            </h5>
                                            <h5
                                                class="modal-title"
                                                id="exampleModalLongTitle"
                                                v-show="statusmodal"
                                            >
                                                Ubah Berita
                                            </h5>
                                            <button
                                                type="button"
                                                class="btn-close"
                                                data-bs-dismiss="modal"
                                                aria-label="Close"
                                            ></button>
                                        </div>

                                        <form
                                            @submit.prevent="
                                                statusmodal
                                                    ? ubahData()
                                                    : simpanData()
                                            "
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
                                                        v-model="
                                                            form.isi_berita
                                                        "
                                                    ></textarea>
                                                    <div
                                                        class="alert-danger errors"
                                                        v-if="errors.isi_berita"
                                                    >
                                                        {{
                                                            errors.isi_berita[0]
                                                        }}
                                                    </div>
                                                </div>
                                                <div class="form-group">
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
                                                <div class="form-group">
                                                    <select
                                                        class="form-control control"
                                                        v-model="
                                                            form.kategori_id
                                                        "
                                                        required
                                                    >
                                                        <option value>
                                                            Pilih Wilayah
                                                        </option>
                                                        <option
                                                            v-for="a in kategoris"
                                                            :key="a.id"
                                                            :value="a.id"
                                                        >
                                                            {{
                                                                a.nama_kategori
                                                            }}
                                                        </option>
                                                    </select>
                                                </div>
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
                                                    :disabled="disabled"
                                                    v-show="!statusmodal"
                                                >
                                                    <i
                                                        v-show="loading"
                                                        class="fa fa-spinner fa-spin"
                                                    ></i>
                                                    Simpan
                                                </button>
                                                <button
                                                    type="submit"
                                                    class="btn btn-success"
                                                    :disabled="disabled"
                                                    v-show="statusmodal"
                                                >
                                                    <i
                                                        v-show="loading"
                                                        class="fa fa-spinner fa-spin"
                                                    ></i>
                                                    Save changes
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="table table-responsive">
                                    <table
                                        id="example2"
                                        class="table table-bordered table-hover"
                                    >
                                        <tr>
                                            <th>Judul</th>
                                            <th>Isi</th>
                                            <th>Gambar</th>
                                            <th>Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                        <tr
                                            v-for="item in beritas.data"
                                            :key="item.id"
                                        >
                                            <td>{{ item.judul }}</td>
                                            <td>{{ item.isi_berita }}</td>
                                            <td>
                                                <img
                                                    v-bind:src="
                                                        '../' + item.gambar
                                                    "
                                                    width="100px"
                                                />
                                            </td>
                                            <td>
                                                {{ item.nama_kategori }}
                                            </td>
                                            <td>
                                                <a
                                                    href="#"
                                                    @click="EditModal(item)"
                                                    ><i
                                                        class="fas fa-edit blue"
                                                    ></i
                                                ></a>
                                                |
                                                <a
                                                    href="#"
                                                    @click="deleteData(item.id)"
                                                    ><i
                                                        class="fas fa-trash-alt red"
                                                    ></i
                                                ></a>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="container">
                                        <pagination
                                            :data="beritas"
                                            @pagination-change-page="loadData"
                                        ></pagination>
                                    </div>
                                </div>
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
            statusmodal: false,
            beritas: {},
            kategoris: {},

            form: new Form({
                id: "",
                judul: "",
                isi_berita: "",
                gambar: "",
                kategori_id: "",
            }),
            priviewimage: null,
            errors: {},
        };
    },
    mounted() {},
    methods: {
        loadData() {
            this.$Progress.start();
            // axios.get("api/dataanggota?page=" + page);
            axios
                .get(
                    // `api/dataanggota?page=${page}&search=${this.search}&searchField=${this.searchField}`
                    `../api/berita`
                )
                .then((data) => {
                    this.beritas = data;
                    this.$Progress.finish();
                })
                .catch((e) => {
                    console.log(e);
                    this.$Progress.fail();
                });
            axios
                .get(`../api/kategori`)
                .then(({ data }) => (this.kategoris = data));
        },
        showModal() {
            this.statusmodal = false;
            this.form.reset();
            $("#modalmuncul").modal("show");
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
        simpanData() {
            this.$Progress.start();
            this.loading = true;
            this.disabled = true;
            this.form
                .post(`../api/berita`)
                .then((response) => {
                    console.log(response);
                    Fire.$emit("refreshData");
                    $("#modalmuncul").modal("hide");
                    Toast.fire({
                        icon: "success",
                        title: "Data Tersimpan",
                    });
                    this.$Progress.finish();
                    this.loading = false;
                    this.disabled = false;
                })
                .catch((error) => {
                    this.$Progress.fail();
                    this.loading = false;
                    this.disabled = false;
                    console.log(error.response.data.errors);
                    this.errors = error.response.data.errors;
                });
        },
        EditModal(item) {
            this.statusmodal = true;
            this.form.reset();
            $("#modalmuncul").modal("show");
            this.form.fill(item);
        },
        ubahData() {
            this.$Progress.start();
            this.loading = true;
            this.disabled = true;

            this.form
                .post(`../api/beritaubah/` + this.form.id)
                .then((response) => {
                    console.log(response);
                    Fire.$emit("refreshData");
                    $("#modalmuncul").modal("hide");
                    Toast.fire({
                        icon: "success",
                        title: "Data Berubah",
                    });
                    this.$Progress.finish();
                    this.loading = false;
                    this.disabled = false;
                })
                .catch((error) => {
                    this.$Progress.fail();
                    this.loading = false;
                    this.disabled = false;
                    console.log(error.response.data.errors);
                    this.errors = error.response.data.errors;
                });
        },
        deleteData(id) {
            Swal.fire({
                title: "Anda Yakin Ingin Menghapus Data Ini ?",
                text: "Klik Batal Untuk Membatalkan Penghapusan",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Hapus",
            }).then((result) => {
                if (result.value) {
                    this.form
                        .delete("../api/berita/" + id)
                        .then(() => {
                            Swal.fire(
                                "Terhapus",
                                "Data Anda Sudah Tehapus",
                                "success"
                            );
                            Fire.$emit("refreshData");
                        })
                        .catch(() => {
                            Swal.fire(
                                "Gagal",
                                "Data Gagal Terhapus",
                                "warning"
                            );
                        });
                }
            });
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
