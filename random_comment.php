<?php
//generate random comment for products
    include('model\product_db.php');
    include('model\customer_db.php');
    $productId = get_all_product_id();
    $customerId= get_all_customer_id();
    $commentArray = 'Ngon đậm đà ăn lại lần 2 vẫn ngon. Mọi người nên đặt thử nhé, quán phục vụ rất nhanh và nhiệt tình.
    Tưởng không ngon nhưng lại ngon không tưởng. Xứng đáng 10 điểm ❤
    Quán phục vụ chu đáo, món ăn bày biện đẹp mắt, hương vị hài hòa. Mình sẽ quay lại ủng hộ nữa.
    Ngoài sức tưởng tượng, giá rẻ mà hương vị cũng ngon. Đặc biệt là quán cực kì sạch sẽ luôn. Nói chung sẽ quay lại nè.
    Đã đặt món này nhiều lần, lần nào cũng ngon. Sẽ tiếp tục ủng hộ quán ạ.
    Thấy nhiều người khen ngon nên đặt ăn thử nhưng cũng thấy bình thường, không có gì đặc sắc lắm.
    Mình phải nói là đã ghiền cái món này của quán rồi. Ăn rất nhiều lần nhưng vẫn rất ngon như lần đầu luôn. Quán ở xa nhưng mỗi dịp cuối tuần mình đều rủ bạn đi ăn cho bằng được.
    So với mặt bằng chung thì giá hơi nhình hơn một tí nhưng tương xứng với chất lượng, 1 like
    Mua nhiều lần rồi, lần nào cũng ngon. Nay rủ bạn bè ăn cùng. Ai cũng khen 
    Thấy review rầm rộ nên đặt ăn thử, kết quả tràn trề thất vọng. Phản hồi khách hàng cũng chậm nữa Quá coi thường khách hàng.';
    $commentArray = explode("
    ", $commentArray);
    for ($i = 0; $i<300 ;$i++) {
        $productIdSample = $productId[rand(0, count($productId)-1)];
        $customerIdSample = $customerId[rand(0, count($customerId)-1)];
        $starSample = rand(3, 5);
        $commentSample = $commentArray[rand(0, count($commentArray)-1)];
        if (getReview($customerIdSample, $productIdSample) == 'notReviewed')
            addRating($productIdSample, $customerIdSample, $starSample, $commentSample);
    
    }

?>