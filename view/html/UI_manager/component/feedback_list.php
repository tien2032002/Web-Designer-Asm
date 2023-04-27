<?php
    foreach($feedbackList as $feedback) {
        echo'
        <hr class="mt-0">
        <div class="card-body d-flex align-items-center justify-content-between">
            <div class="d-flex flex-start">
                <img class="rounded-circle me-3"
                src="'.$feedback->avatar.'.jpg" alt="avatar" width="60"
                height="60">
                <div>
                    <h6 class="fw-bold mb-1">'.$feedback->customer_name.'</h6>
                    <div class="d-flex align-items-center mb-3">
                        <p class="mb-0 me-4 text-muted">'.$feedback->product_name.'</p>
                        <span style="font-weight:500;">Rating: '.$feedback->stars.'<i style="color: #da5619;" class="bi bi-star-fill ms-1"></i></span>
                    </div>
                    <div class="mb-0 col-11">
                        '.$feedback->comment.'
                    </div>
                </div>
            </div>
            <button class="btn btn-danger" style="border-radius: 0;" onclick="deleteFeedback(\''.$feedback->id.'\')">Xóa</button>
        </div>
        ';
    }
?>
