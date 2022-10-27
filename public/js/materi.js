$(document).ready(function () {
  // otomatis membuka accordion pertama
  collapseFirst = function () {
    let accordion = $(".accordion-item:first-child");
    accordion.find(".accordion-button").removeClass("collapsed");
    accordion.find(".accordion-collapse").addClass("show");
  };
  $(".btn-beli").click(function () {
    alert("Anda harus login terlebih dahulu");
  });

  // get api materi
  var id = window.location.pathname.split("/").pop();
  var urlMateri = "https://lms.lazy2.codes/api/course/detail/" + id;
  $.ajax({
    url: urlMateri,
    type: "GET",
    dataType: "JSON",
    success: function (result) {
      console.log(result);
      $(".title_course").html(result.title);
      $(".old_price").html("<s>Rp. " + result.old_price + "</s>");
      $(".new_price").html("Rp. " + result.new_price);

      let data = result.video;
      $.each(data, function (i, materi) {
        $("#list-materi").append(`
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading${i}">
                <button class="accordion-button ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse${i}" aria-expanded="false" aria-controls="flush-collapse${i}">
                    ${i + 1}. ${materi.title}
                </button>
            </h2>
            <div id="flush-collapse${i}" class="accordion-collapse collapse" aria-labelledby="flush-heading${i}">
                <div class="accordion-body p-0">
                    <div class="nav-link" data-video="${materi.video}">
                        ${materi.title}
                    </div>
                </div>
            </div>
        </div>`);
      });
      collapseFirst();
    },
  });

  // get api bundling
  var urlBundling = "https://lms.lazy2.codes/public/api/bundling";
  var base_url = window.location.origin;
  $.ajax({
    url: urlBundling,
    type: "GET",
    dataType: "JSON",
    success: function (bundling) {
      console.log(bundling);
      $.each(bundling, function (i, data) {
        $("#daftar-bundling").append(`
          <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="card card-course">
                  <div class="card-body">
                      <span>Basic</span>
                      <img src="${base_url}/img/course/bg1.jpg" alt="" class="w-100">
                  </div>
                  <div class="card-footer">
                      <p class="card-title">${data.title}</p>
                      <div class="course-footer">
                          <s>Rp. ${data.old_price}</s>
                          <p>Rp. ${data.new_price}</p>
                          <div class="row beli-course w-100 m-0">
                              <div class="col-10 p-0 pe-3">
                                <a href="/course/detail-course/${data.bundling_id}" class="btn w-100">beli bundling</a>
                              </div>
                              <div class="col-2 p-0 align-self-center">
                                <a href="#" class="fa fa-sharp fa-solid fa-cart-plus py-2"></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>`);
      });
    },
  });
});
