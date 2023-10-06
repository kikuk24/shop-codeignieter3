<main role="main" class="container mt-4">
  <?php $this->load->view('layouts/_alert') ?>
  <div class="row">
    <div class="col-md-9">
      <div class="row mb-3">
        <div class="col-12">
          <div class="card mb-3">
            <div class="card-body">Kategori: <strong>Semua Kategori</strong>
              <span class="float-end">Urutan Harga
                <a href="#" class="badge bg-primary text-decoration-none">Termurah</a> |
                <a href="#" class="badge bg-primary text-decoration-none">Termahal</a>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card mb-5">
            <div class="card-header">
              <img src="https://placehold.co/100x70" alt="" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Product Title</h5>
                <p class="card-text"><strong>Rp.5000</strong></p>
                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                <a href="" class="badge bg-primary text-decoration-none"><i class="fas fa-tags"></i> Category</a>
              </div>
              <div class="card-footer">
                <form action="">
                  <div class="input-group">
                    <input type="number" class="form-control">
                    <div class="input-group-append">
                      <button class="btn btn-primary">Add to cart</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>
    </div>
    <div class="col-md-3">
      <div class="row">
        <div class="col-md-12">
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="card-title">Pencarian</>
            </div>
            <div class="card-body">
              <form action="">
                <div class="input-group">
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <button class="btn btn-primary">Cari</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="card-title">Kategori</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Semua Kategori</li>
              <li class="list-group-item">Kategori 1</li>
              <li class="list-group-item">Kategori 2</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>