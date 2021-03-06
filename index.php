<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>에이스메인</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/ace_HF.css">
    <link rel="stylesheet" href="css/ace_M.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <div id="h_top">
            <ul class="h_top_btn">
                <?php
                    include "connect2.php";

                    if(isset($_SESSION["name"])){
                        echo '<li class="join"><a href="login_ace.html">로그아웃</a></li>';
                        echo '<li class="join"><a href="login_ace.html">마이페이지</a></li>';
                    }else{
                        echo '<li class="join"><a href="login_ace.html">로그인</a></li>';
                        echo '<li class="join"><a href="join_ace.html">회원가입</a></li>';
                    }
                ?>
                <!-- <li class="join"><a href="login_ace.html">로그인</a></li> -->
                <!-- <li class="join"><a href="join_ace.html">회원가입</a></li> -->
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
        <section id="bnr_big">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="">
                            <video src="img/jenny_video.mp4" id="background_video" preload="auto" autoplay="autoplay"
                                muted="muted" loop volume="0">
                            </video>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <img src="img/jenny_main2.jpg" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <img src="img/21040101464216368813.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next arrow"></div>
            <div class="swiper-button-prev arrow"></div>
        </section>
        <section id="SCIENCE" class="cont_Sec">
            <h2>ACE SCIENCE</h2>
            <a class="more_btn" href="#">more</a>
            <article>
                <div class="sci_wrap">
                    <div class="tab_btn">
                        <ul>
                            <li class="tab active"><a href="#">HYBRID Z SPRING</a></li>
                            <li class="tab"><a href="#">5 ZERO SYSTEM</a></li>
                            <li class="tab"><a href="#">NEW MATERIAL</a></li>
                            <li class="tab"><a href="#">ECO & HEALTH</a></li>
                        </ul>
                    </div>
                    <div class="video">
                        <video autoplay loop muted>
                            <source src="img/1440_bg01.mp4" type="video/mp4"></video>
                    </div>
                    <div class="sci_txt">
                        <div class="sci_txt">
                            <div>
                                <h3>
                                    오늘 밤 어떤 스프링으로<br>
                                    만든 침대에서 <br>
                                    주무시겠습니까?
                                </h3>
                                <p>
                                    에이스만의 첨단공학이 적용된 스프링은<br>
                                    인체 곡선과 하중 분포에 따라 위에서 한 번<br>
                                    부드럽게 맞춰주고 밑에서 또 한 번<br>
                                    단단하게 받처줍니다.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        <section id="COLLECTION" class="cont_Sec">
            <h2>ACE COLLECTION</h2>
            <a class="more_btn" href="#">more</a>
            <article>
                <div class="col_btn">
                    <ul>
                        <li class="tab active"><a href="#">신제품</a></li>
                        <li class="tab"><a href="#">| 추천제품</a></li>
                    </ul>
                </div>
                <div id="col_wrap">
                    <div class="col">
                        <p>
                            <img src="img/ACE COLLECTION1.jpg">
                        </p>
                        <div class="col_txt">
                            <ul>
                                <li>라탄인테리어</li>
                                <li>앤틱스타일</li>
                                <li>클래식디자인</li>
                            </ul>
                            <h3>FOGLIA</h3>
                            <p>오리엔탈 휴양지 감성을 느낄 수 있는 FOGLIA</p>
                            <div>
                                <a href="#">VIEW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <p>
                            <img src="img/ACE COLLECTION2.jpg">
                        </p>
                        <div class="col_txt">
                            <ul>
                                <li>1인가구</li>
                                <li>싱글침대</li>
                                <li>수납형침대</li>
                                <li>아이침대추천</li>
                            </ul>
                            <h3>OMAGGIO</h3>
                            <p>침실분위기를 다채롭게 연출 할 수 있는 침대 OMAGGIO</p>
                            <div>
                                <a href="#">VIEW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <p>
                            <img src="img/ACE COLLECTION3.jpg">
                        </p>
                        <div class="col_txt">
                            <ul>
                                <li>1인가구</li>
                                <li>싱글침대</li>
                                <li>수납형침대</li>
                                <li>아이침대추천</li>
                            </ul>
                            <h3>TEENSTER</h3>
                            <p>공간 활용도와 실용성을 높힌 TEENSTER</p>
                            <div>
                                <a href="#">VIEW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col_scroll">
                    <div class="scrollbar"></div>
                </div>
            </article>
        </section>
        <section id="NEWS" class="cont_Sec">
            <h2>ACE NEWS</h2>
            <article>
                <div class="news_txt">
                    <p>에이스침대의<br>
                        새로운 소식을 알려드립니다</p>
                </div>
                <div class="news_img">
                    <img class="event_img1" src="img/ACE NEWS1.jpg" alt="뉴스">
                    <img class="event_img2" src="img/ACE NEWS2.jpg" alt="이벤트">
                    <img class="event_img3" src="img/ACE NEWS3.jpg" alt="이벤트">
                </div>
                <div class="news_list">
                    <ul>
                        <li class="news_event1 active">
                            <h4>매장오픈소식</h4>
                            <p>롯데 메종 동부산점 OPEN</p>
                        </li>
                        <li class="news_event2">
                            <h4>매장오픈소식</h4>
                            <p>에이스스퀘어 관악점 OPEN</p>
                        </li>
                        <li class="news_event3">
                            <h4>EVENT</h4>
                            <p>LG전자 베스트샵 제휴 이벤트</p>
                        </li>
                    </ul>
                </div>
            </article>
        </section>
        <section id="SNS" class="cont_Sec">
            <h2>NOW SNS</h2>
            <article>
                <ul class="sns_pic">
                    <li>
                        <a href="#">
                            <img src="img/NOW SNS1.png">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/NOW SNS2.jpg">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/NOW SNS3.jpg">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/NOW SNS4.png">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/NOW SNS5.png">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/NOW SNS6.png">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/NOW SNS7.png">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/NOW SNS8.png">
                        </a>
                    </li>
                </ul>
                <ul class="sns_btn">
                    <li>
                        <a href="#">
                            <img src="img/con6-bts1.png">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/con6-bts2.png">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/con6-bts3.png">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/con6-bts4.png">
                        </a>
                    </li>
                </ul>
            </article>
        </section>
        <section id="map" class="cont_Sec">
            <article class="map_wrap">
                <div class="map_img">
                    <img src="img/store-map.jpg" alt="map">
                </div>
                <div class="map_txt">
                    <p>현재 고객님과 가까운<br>
                        매장을 안내해 드립니다.
                    </p>
                    <div>
                        <input type="text" placeholder="매장명 및 지역검색">
                        <a href="">
                            <span class="map_search"></span>
                        </a>
                    </div>
                </div>
            </article>
            <article class="notice">
                <ul>
                    <li>
                        <a href="">
                            <img src="img/mainsec8-icon1.png" alt="제품메뉴얼">
                            <p>제품 매뉴얼</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="img/mainsec8-icon2.png" alt="A/S및 상담">
                            <p>A/S및 상담</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="img/mainsec8-icon3.png" alt="자주 묻는 질문">
                            <p>자주 묻는 질문</p>
                        </a>
                    </li>
                </ul>
            </article>
        </section>
        <section id="info" class="cont_Sec">
            <article>
                <div class="call">
                    <ul>
                        <li>
                            <h5>고객센터</h5>
                            <p>1599-7121</p>
                            <div>(09:30~18:30, 토요일&공휴일 휴무)</div>
                        </li>
                        <li>
                            <h5>A/S 문의</h5>
                            <p>080-735-7123</p>
                            <div>(09:30~18:30, 토요일&공휴일 휴무)</div>
                        </li>
                    </ul>
                </div>
                <div class="app">
                    <div>
                        <p>언제 어디서든 에이스침대의<br>
                            침대과학을 AR APP으로 만나보세요!
                        </p>
                        <ul class="store_btn">
                            <li><a href="">APP STORE</a></li>
                            <li><a href="">GOOGLE PALY</a></li>
                        </ul>
                        <a class="more_btn" href="">more</a>
                    </div>
                </div>
            </article>
        </section>
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
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/ace_script.js"></script>
</body>

</html>