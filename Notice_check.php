<?php
    session_start();

    $title = $_POST["title"];
    $name = $_POST["name"];
    $pw = $_POST["pw"];
    $date = $_POST["days"];
    $desc = $_POST["comment"];

    // $desc = explode("\n", $_POST["comment"]);
    // $descs = json_encode($desc);

    include "connect.php"; //다른 파일을 연결 할때 사용 (include)
    mysqli_query($conn,"INSERT INTO acebed_board (title, writer, descriptions, dates, passward)
    VALUES ('$title' , '$name' , '$desc' , '$date' , '$pw')");

    $result = mysqli_query($conn, $board);
    $row = mysqli_fetch_array($result);

    if(!$result){
        echo "value 저장에 실패하였습니다 : ";
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항 확인</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/writing2_HF.css">
    <link rel="stylesheet" href="css/sub_writing2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
</head>

<body>

    <header>
        <div id="h_top">
            <ul class="h_top_btn">
                <li class="join"><a href="login_ace.html">로그인</a></li>
                <li class="join"><a href="join_ace.html">회원가입</a></li>
                <li class="radius_btn wedding"><a href="">웨딩멤버스</a></li>
                <li class="radius_btn"><a href="">에이스 침대몰</a></li>
            </ul>
        </div>
        <div id="h_bot">
            <div class="h_left">
                <ul>
                    <li><a class="eng" href="">BED</a>
                        <a class="kor" href="">침대</a>
                        <ul class="sub">
                            <li>
                                <a href="frame_ace.html">프레임</a>
                            </li>
                            <li>
                                <a href="">매트리스</a>
                            </li>
                            <li>
                                <a href="">신제품</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="eng" href="">FURNITURE</a>
                        <a class="kor" href="">가구</a>
                        <ul class="sub">
                            <li>
                                <a href="">룸 세트</a>
                            </li>
                            <li>
                                <a href="">리빙가구</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="eng" href="">STRESSLESS</a>
                        <a class="kor" href="">스트레스리스</a>
                        <ul class="sub">
                            <li>
                                <a href="">1인용 리클라이너</a>
                            </li>
                            <li>
                                <a href="">오피스체어</a>
                            </li>
                            <li>
                                <a href="">소파</a>
                            </li>
                            <li>
                                <a href="">테이블&악세서리</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="eng" href="">SLEEPCARE</a>
                        <a class="kor" href="">슬립케어</a>
                        <ul class="sub">
                            <li>
                                <a href="">마이크로케어</a>
                            </li>
                            <li>
                                <a href="">스마트슬리브</a>
                            </li>
                            <li>
                                <a href="">보이로패드</a>
                            </li>
                            <li>
                                <a href="">마이크로가드 eco</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <h1 class="h_logo">
                <a href="index.php">
                    <img src="img//header-logo.png" alt="ace로고">
                </a>
            </h1>
            <div class="h_right">
                <ul>
                    <li>
                        <a href="">침대과학</a>
                        <ul class="sub_r">
                            <li>
                                <a href="sping_ace.html">스프링</a>
                            </li>
                            <li>
                                <a href="">기술력</a>
                            </li>
                            <li>
                                <a href="">특허 및 수상내역</a>
                            </li>
                            <li>
                                <a href="">침대과학연구소</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">에이스스토리</a>
                        <ul class="sub_r">
                            <li>
                                <a href="">NOW SNS</a>
                            </li>
                            <li>
                                <a href="">고객후기</a>
                            </li>
                            <li>
                                <a href="">뉴스룸</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">고객체험</a>
                        <ul class="sub_r">
                            <li>
                                <a href="">매트리스 체험존</a>
                            </li>
                            <li>
                                <a href="">이동수면공학 연구소</a>
                            </li>
                            <li>
                                <a href="">공장 견학 신청</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">공지/이벤트</a>
                        <ul class="sub_r">
                            <li>
                                <a href="">이벤트</a>
                            </li>
                            <li>
                                <a href="announce_ace.html">당첨자 안내</a>
                            </li>
                            <li>
                                <a href="Notice_list.php">공지사항</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">매장안내</a>
                        <ul class="sub_r">
                            <li>
                                <a href="">매장찾기</a>
                            </li>
                            <li>
                                <a href="">에이스 스퀘어</a>
                            </li>
                            <li>
                                <a href="">에이스 에비뉴</a>
                            </li>
                        </ul>
                    </li>
                    <li class="search">검색</li>
                    <li class="nav" onclick="openNav()">삼선</li>
                </ul>
            </div>
        </div>
        <div id="search_wrap">
            <div class="search_txt">
                <input type="text" placeholder="궁금하신 제품이나 정보를 빠르게 찾아보세요">
                <span></span>
            </div>
            <div class="search_close">
                <span>X</span>
            </div>
        </div>
        <div id="mySidenav" class="sidenav">
            <div class="visual_menu">
                <p class="language">
                    <a href="" class="KOR">KOR</a>
                    <a href="">ENG</a>
                </p>
                <div class="menu">
                    <div class="img_1">
                        <img src="img/all-menu-visual1.jpg" alt="">
                    </div>
                    <div class="menu_text">
                        <div class="one_d">
                            <a href="#">BED</a>
                        </div>
                    </div>
                </div>
                <div class="menu">
                    <div class="img">
                        <img src="img/all-menu-visual2.jpg" alt="">
                    </div>
                    <div class="menu_text">
                        <div class="one_d">
                            <a href="#">FURNITURE</a>
                        </div>
                    </div>
                </div>
                <div class="menu">
                    <div class="img">
                        <img src="img/all-menu-visual3.jpg" alt="">
                    </div>
                    <div class="menu_text">
                        <div class="one_d">
                            <a href="#">STRESSLESS</a>
                        </div>
                    </div>
                </div>
                <div class="menu">
                    <div class="img">
                        <img src="img/all-menu-visual4.jpg" alt="">
                    </div>
                    <div class="menu_text">
                        <div class="one_d">
                            <a href="#">SLEEP CARE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="all_menu">
                <div class="menu_list_div m_acco_menu">
                    <div class="menu">
                        <a href="javascript:" class="one_d">침대과학</a>
                        <div class="two_d">
                                <a href="/bed-science/spring/index.do" target="_self">스프링</a>
                                <a href="/bed-science/technology/index.do" target="_self">기술력</a>
                                <a href="/bed-science/awards/index.do" target="_self">특허 및 수상내역</a>
                                <a href="/bed-science/lab/index.do" target="_self">침대공학연구소</a>
                                </div>
                    </div>
                    <div class="menu">
                        <a href="javascript:" class="one_d">에이스 스토리</a>
                        <div class="two_d">
                                <a href="/ace-story/sns/index.do" target="_self">NOW SNS</a>
                                <a href="/ace-story/review/list.do" target="_self">고객후기</a>
                                <a href="/ace-story/news/list.do" target="_self">뉴스룸</a>
                                </div>
                    </div>
                    <div class="menu">
                        <a href="javascript:" class="one_d">고객체험</a>
                        <div class="two_d">
                                <a href="/experience/mattress/index.do" target="_self">매트리스 체험존</a>
                                <a href="/experience/move/index.do" target="_self">이동수면공학 연구소</a>
                                <a href="/experience/factory/index.do" target="_self">공장 견학 신청</a>
                                </div>
                    </div>
                    <div class="menu">
                        <a href="javascript:" class="one_d">공지/이벤트</a>
                        <div class="two_d">
                                <a href="/board/event/list.do" target="_self">이벤트</a>
                                <a href="/board/announce/list.do" target="_self">당첨자 안내</a>
                                <a href="/board/notice/list.do" target="_self">공지사항</a>
                                </div>
                    </div>
                    <div class="menu">
                        <a href="javascript:" class="one_d">매장안내</a>
                        <div class="two_d">
                                <a href="/store/guide/index.do" target="_self">매장찾기</a>
                                <a href="/store/square/index.do" target="_self">에이스 스퀘어</a>
                                <a href="/store/avenue/index.do" target="_self">에이스 에비뉴</a>
                                </div>
                    </div>
                    <div class="menu">
                        <a href="javascript:" class="one_d">기업정보</a>
                        <div class="two_d">
                                <a href="/business/overview/index.do" target="_self">브랜드 스토리</a>
                                <a href="/business/management-information/list.do" target="_self">경영정보</a>
                                <a href="/business/guideline/index.do" target="_self">윤리경영</a>
                                <a href="/business/csr/index.do" target="_self">사회공익활동</a>
                                <a href="/business/location/index.do" target="_self">오시는길</a>
                                </div>
                    </div>
                    <div class="menu">
                        <a href="javascript:" class="one_d">고객지원</a>
                        <div class="two_d">
                                <a href="/customer/prdct-manual/index.do" target="_self">제품 매뉴얼</a>
                                <a href="javascript:cmmCtrl.loginCheckPage('/customer/counsel/index.do')" target="_self">AS 및 상담</a>
                                <a href="/customer/faq/index.do" target="_self">자주 묻는 질문</a>
                                </div>
                    </div>
                    <div class="menu">
                        <a href="javascript:" class="one_d">웨딩멤버스</a>
                        <div class="two_d">
                                <a href="/wedding-members/benefit/index.do" target="_self">멤버스 혜택</a>
                                <a href="/wedding-members/join/index.do" target="_self">가입안내</a>
                                </div>
                    </div>
                    <div class="menu">
                        <a href="javascript:" class="one_d">기타</a>
                        <div class="two_d">
                                <a href="/etc/policy/use/view.do" target="_self">이용약관</a>
                                <a href="/etc/policy/privacy/view.do" target="_self">개인정보처리방침</a>
                                <a href="/etc/new-store/index.do" target="_self">매장개설안내</a>
                                <a href="/etc/special-business/index.do" target="_self">특판사업</a>
                                </div>
                    </div>
                </div>
            </div>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        </div>
    </header>

    <main>
        <section class="writing_wrap">
            <h2>공지사항</h2>
            <div class="view_div">
                <div class="inner">
                    <div class="view_top">
                        <div class="title_view">
                            <?php
                            echo "제목 : " . $title . "<br>";
                            echo "날짜 : " . $date . "<br>";
                            ?>
                        </div>
                        <div class="sns_view">
                            <a href="">공유하기</a>
                        </div>
                    </div>
                    <?php
                        echo "이름 : " . $name . "<br>";
                        echo "본문 : " . nl2br($desc) . "<br>";
                        echo "<br>";
                    ?>
                </div>
            </div>
        </section>
        <div class="N_list">
            <a href="Notice_list.php">목록</a>
        </div>
    </main>
    <div id="top_wrap">
        <p class="top1">TOP</p>
        <div class="top_btn">+</div>
    </div>
    <footer>
        <div id="f_left">
            <div class="f_nav">
                <ul>
                    <li><a href="#">기업정보</a></li>
                    <li><a href="#">이용약관</a></li>
                    <li><a href="#" class="priv">개인정보처리방침</a></li>
                    <li><a href="#">매장개설안내</a></li>
                    <li><a href="#">특판사업</a></li>
                    <li><a href="#">고객지원</a></li>
                    <li><a href="#">구매인증센터</a></li>
                </ul>
            </div>
            <div class="address">
                <address>본사 : 경기도 성남시 중원구 사기막골로 105번길 42(상대원동) / 서울영업본부 : 서울특별시 강남구 도산대로 218 / FAX : 02-544-8788
                </address>
                <p>COPYRIGHT (C) ACE BED CORPORATION ALL RIGHTS RESERVED</p>
            </div>
        </div>
        <div class="footer1">
            <div class="f_right">
                <div class="links">
                    <button>
                        <span>FAMILY SITE</span>
                    </button>
                    <ul>
                        <li>
                            <a target="_blank">
                                <span>ENGLISH</span>
                            </a>
                        </li>
                        <li>
                            <a target="_blank">
                                <span>에이스 에비뉴</span>
                            </a>
                        </li>
                        <li>
                            <a target="_blank">
                                <span>에이스 해리츠</span>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" class="last_sel">
                                <span>에이스 침대몰</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/ace_script.js"></script>
</body>

</html>