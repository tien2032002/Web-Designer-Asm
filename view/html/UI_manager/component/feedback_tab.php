<style>
    .btn-override:hover{
        background-color: #B38B91;
        color: #fff;
        border: #B38B91 ;
    }

    .btn-override{
        color: #905e65 ;
        background-color: #fff;
        border: solid 1px #B38B91 ;
    }
    .activeDropImg {
        border: 1px solid black;
    }

    .dropImageCss{

        width: 280px;
        height: 180px;
        overflow: hidden;
        background-size: cover;
        background-position: center center;
    }
</style>
<div class="row d-flex justify-content-center mt-4 me-4 ms-4">
    <div class="card text-dark" id="feedback_list">
        <h4 class="mt-3 ms-3">Recent comments</h4>
        
    </div>
</div>
<script>
    var page = 1
    var end = 0
    function loadMore() {
        var link = "/feedback_list?page=" + page.toString()
        $.ajax({
            url: link,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                console.log(data)
                if(data == "") {
                    end = 1;
                }
                if (end == 0) {
                    document.getElementById("feedback_list").innerHTML += data;
                    page++;
                }
                
            }
        });
    }

    function deleteFeedback(id) {
        var delLink = "del_feedback?id=" + id.toString()
        $.ajax({
            url: delLink,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                document.getElementById("feedback_list").innerHTML = "<h4 class=\"mt-3 ms-3\">Recent comments</h4>"
            }
        });
        var i = page
        page = 1
        for (var j=1; j<=page; j++) {
            loadMore()
            console.log("load again")
        }
    }
    loadMore()
</script>
<div class=" d-flex justify-content-center"><button class="btn btn-primary mt-4 mb-4" onclick="loadMore()"> Xem thêm</button></div>