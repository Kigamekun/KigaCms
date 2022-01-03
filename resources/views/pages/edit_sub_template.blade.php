<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    <iframe id="clientframe" scrolling="no" style="position: relative; height: 100vh; width: 100%;"
    srcdoc='{{ $data->code }}'
    frameborder="0"></iframe>



    <button id="modalColor"  style="display: none" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Launch static backdrop modal
      </button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <label for="src_element">Source</label>
            <input class="form-control" placeholder="color change" type="color" name="color_element" id="color_element">

            <button id="change_color_submit" class="btn btn-success">Submit !</button>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>



        var DELAY = 500, clicks = 0, timer = null;

        $(function(){
            var iframe = $('#clientframe').contents();


        console.log("Log To Frame");
            iframe.find("body").on("click", function(e){
                console.log('clicked');
                clicks++;  //count clicks

                if(clicks === 1) {

                    timer = setTimeout(function() {

                        if (e.target.tagName == "div" || e.target.tagName == "DIV" || e.target.tagName == "P" || e.target.tagName == "p" || e.target.tagName == "H1" || e.target
                        .tagName ==
                        "h1" || e.target.tagName == "H2" || e.target.tagName == "h2" || e.target.tagName == "H3" || e.target
                        .tagName == "h3" || e.target.tagName == "H4" || e.target.tagName == "h4" || e.target.tagName ==
                        "H5" ||
                        e.target.tagName == "h5" || e.target.tagName == "H6" || e.target.tagName == "h6" || e.target
                        .tagName ==
                        "B" || e.target.tagName == "b") {
                        $('#modalColor').click();

                        document.getElementById("change_color_submit").onclick = function() {
                            if (document.getElementById("color_element").value) {
                                e.target.style.color = document.getElementById("color_element").value;
                                e.target.style.background = document.getElementById("color_element").value;
                                document.getElementById("color_element").value = "";

                            }

                        }

                    }else{
                        if (e.target.tagName == "IMG" || e.target.tagName == "img") {
                         modalElement.style.display = "block";
                         document.getElementById("button_change_el").onclick = function() {


                             if (document.getElementById("src_element").value) {
                                 e.target.src = document.getElementById("src_element").value;
                                 document.getElementById("src_element").value = "";
                             }
                             if (document.getElementById("width_element").value) {
                                 // console.log('masuk');
                                 e.target.style.width = document.getElementById("width_element").value;
                                 document.getElementById("width_element").value = "";
                             }

                             if (document.getElementById("height_element").value) {
                                // console.log('masuk');
                                e.target.style.height = document.getElementById("height_element").value;
                                document.getElementById("height_element").value = "";
                            }





                             if (document.getElementById("margin_element").value) {
                                 e.target.style.margin = document.getElementById("margin_element").value ;
                                 document.getElementById("margin_element").value = "";

                             }
                             if (document.getElementById("border_radius_element").value) {
                                e.target.style.borderRadius = document.getElementById("border_radius_element").value;
                                document.getElementById("border_radius_element").value = "";

                            }


                         }

                        }

                    }

                        clicks = 0;             //after action performed, reset counter

                    }, DELAY);

                } else {

                    clearTimeout(timer);    //prevent single-click action
                    // alert("Double Click");  //perform double-click action
                    clicks = 0;             //after action performed, reset counter
                }

            })
            .on("dblclick", function(e){
                e.preventDefault();
                // console.log('masuk');
                myModalAnimation.style.display = "block";
                document.getElementById("button_change_animation").onclick = function() {
                if (document.getElementById("animation_component").value) {
                    e.target.setAttribute('data-aos',document.getElementById("animation_component").value);

                        e.target.classList.remove("aos-init");
                        e.target.classList.remove('aos-animate');

                    setTimeout(function(){

                        e.target.className += " "+'aos-init aos-animate';
                    }, 3000);

                    document.getElementById("animation_component").value = "";

                }
            };
            });

        });

    </script>

</body>
</html>
