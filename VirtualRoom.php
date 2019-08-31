<!DOCTYPE html>
<html lang="en">
<head>
    <title>Course - Teachers</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Course Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/VirtualRoom.css">
    <link rel="stylesheet" type="text/css" href="Chat/ChatRoom.css">
    <link rel="stylesheet" type="text/css" href="Tabbar/TabContainer.css">
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>

</head>
<body>
<div class="container" style="background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5); width: 100%;">
    <div class="left">
        <div class="videoWrapper">
            <!-- Copy & Pasted from YouTube -->
            <!-- <iframe width="560" height="349" src="http://www.youtube.com/embed/n_dZNLr2cME?rel=0&hd=1" frameborder="0" allowfullscreen style="border-radius: 8px"></iframe> -->
            <pre id="myCode"></pre>
            <div id="myCodef"></div>
        </div>
    <br/>

        <div>
            <input id="myUrl" type="text" value="" />
        </div>
        <div>
            <button id="myBtn">YouTube</button>
            <button id="myBtnf">Facebook</button>
        </div>
        <span class="lesson-title">Giải phương trình bậc hai</span>
        <div>
            <br/>
        </div>
        <p style="text-align: justify">
            <b>Luyện thi THPT quốc gia PEN-C môn Toán - thầy Nguyễn Thanh Tùng</b> được thiết kế phù hợp hơn với những học sinh có học lực Khá - Giỏi khi tham gia ôn luyện cho kì thi THPT quốc gia. Khóa học được tinh gọn nhưng toàn diện, đảm bảo sự bao phủ toàn bộ kiến thức bám sát cấu trúc đề thi THPT quốc gia. Với sự tham gia giảng dạy của thầy Nguyễn Thanh Tùng - Thầy Tùng Mind-map, thầy giáo của sự chỉn chu, bài bản và sự nghiêm túc trong mỗi giờ giảng, chắc chắn các bạn học sinh sẽ vô cùng thích thú và hứng khởi khi đăng kí khóa học.
        </p>
        <p class="font-italic" style="text-align: justify">
            Đặc biệt, cuối mỗi chuyên đề đều có đề kiểm tra năng lực được chia thành 4 level để học sinh thử thách và đánh giá mức độ nắm vững kiến thức ở mỗi chuyên đề của mình. Đề thi 4 level được xây dựng theo 4 cấp độ câu hỏi Nhận biết, Thông hiểu, Vận dụng, Vận dụng cao. Vượt qua level thấp mới được thi tiếp level cao hơn. Hoàn thành 4 level được coi là đã nắm vững kiến thức trong chuyên đề đó.
        </p>
        <p>
            Học sinh trước khi tham gia khóa học cần:
        </p>
        <ul>
            <li>
                <b>Đối với kiến thức 10,11:</b> Nắm chắc những phần kiến thức lớp 10,11 được vận dụng sang lớp 12 như: xét dấu tam thức bậc II, các công thức về hình học phẳng ứng dụng trong chuyên đề số phức, hàm số,...
            </li>
        </ul>
        <ul>
            <li>
                <b>Đối với kiến thức lớp 12:</b> hiểu các khái niệm mới và áp dụng làm được các bài tập cơ bản như cực trị, tích phân, phương trình mũ - logarit..
            </li>
        </ul>
        <h2 class="course-outline">
            <span>Đề cương môn học</span>
        </h2>
    </div>
    <div class="right">
        <?php include("Tabbar/TabContainer.php"); ?>
        <div class="tab-slider--nav">
            <ul class="tab-slider--tabs">
                <li class="tab-slider--trigger active" rel="tab1">Tab 1</li>
                <li class="tab-slider--trigger" rel="tab2">Tab 2</li>
            </ul>
        </div>
    </div>
</div>

<script type="text/javascript">
    function getId(url) {
    var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
    var match = url.match(regExp);

    if (match && match[2].length == 11) {
        return match[2];
    } else {
        return 'error';
    }
}

function getIdf(url) {
    var testStr = "https://www.facebook.com/wftv/videos/2372884026364163/jvhvjkđsffgdsfds"
    var splitStr = testStr.substring(url.indexOf('/videos/') + 8);
    var test=splitStr.substring(splitStr.indexOf('/'));
    var res = splitStr.replace(test, "");
    return res;
}
var myId;

$('#myBtn').click(function () {
    var myUrl = $('#myUrl').val();
    myId = getId(myUrl);
    
    $('#myId').html(myId);
    $('#myCode').html('<iframe width="560" height="349" src="//www.youtube.com/embed/' + myId + '?autoplay=1&showinfo=0&controls=0" frameborder="0" allowfullscreen style="border-radius: 8px"></iframe>');
});

$('#myBtnf').click(function () {
    var myUrl = $('#myUrl').val();
    myId = getIdf(myUrl);
    
    $('#myId').html(myId);
    
    $('#myCodef').html('<script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></scr'+'ipt><div class="fb-video" data-href="https://www.facebook.com/facebook/videos/'+myId+'/" data-width="500" data-show-text="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook/videos/'+myId+'/"></blockquote></div></div>');
});

</script>



<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/teachers_custom.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script  src="Tabbar/TabContainer.js"></script>
</body>
</html>