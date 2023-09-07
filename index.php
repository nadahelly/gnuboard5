<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>
<!-- 콘텐츠 넣기 -->
<div id="u-skip">
      <a href="#gnb"><span>주요메뉴 바로가기</span></a>
      <a href="#main"><span>컨텐츠 바로가기</span></a>
    </div>
    <div class="wrap">
      <header data-include-path="./outline/header.html"></header>
      <main id="main">
        <section class="container section-g section-slide">
          <div class="slide-txt">
            <div class="txt-top">
              <p>
                사단법인 한국박물관협회 <br />
                (The Korean Museum Association)
              </p>
            </div>
            <div class="txt-middle">
              <p>
                '박물관 및 미술관 진흥법(1999년 2월 8일 개정법 제34조)'에 정하는
                <br />
                바의 자격요건을 갖춘 비영리 목적의 박물관·미술관 협의체이며
                <br />
                국내외 박물관·미술관 상호간의 유기적 협조체제 및 제도적
                보호·육성에 <br />
                이바지함을 목적으로 하고있습니다
              </p>
            </div>
            <div class="txt-bottom">
              <span> 사무국 | 02-795-0959 | kormuseum@hanmail.net </span>
            </div>
          </div>
          <div class="swiper slide-g slide-intro">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img
                  src="/gnuboard5/images/main/slide_bg/국립중앙박물관 1.jpg"
                  alt="국립중앙박물관"
                />
              </div>
              <div class="swiper-slide">
                <img src="./images/main/slide_bg/bg2.jpg" alt="박물관이미지" />
              </div>
              <div class="swiper-slide">
                <img src="./images/main/slide_bg/bg3.jpg" alt="박물관이미지" />
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
          <div class="btns">
            <button type="button" class="swiper-btn-play">슬라이드 재생</button>
            <button type="button" class="swiper-btn-stop">슬라이드 정지</button>
          </div>
        </section>
        <section class="container section-g section-show">
          <h2 class="sec-tit">전시 안내</h2>
          <div class="inner">
            <div class="swiper sec-contents show-contents">
              <div class="swiper-wrapper lst-show">
                <div class="swiper-slide show-item">
                  <a href="#">
                    <img
                      src="./images/main/전시안내/1.jpg"
                      alt="메소포타미아, 저 기록의 땅"
                    />
                  </a>
                  <div class="show-txt">
                    <div class="show-bg">
                      <span class="show-bg-black">전시중</span>
                      <span class="show-bg-white">테마전</span>
                    </div>
                    <a href="#">메소포타미아, 저 기록의 땅</a>
                    <p>2022.07.22~2024.01.28</p>
                  </div>
                </div>
                <div class="swiper-slide show-item">
                  <a href="#">
                    <img
                      src="./images/main/전시안내/2.jpg"
                      alt="영원한 여정, 특별한 동행"
                    />
                  </a>
                  <div class="show-txt">
                    <div class="show-bg">
                      <span class="show-bg-black">전시중</span>
                      <span class="show-bg-white">특별전</span>
                    </div>
                    <a href="#">영원한 여정, 특별한 동행</a>
                    <p>2022.05.26~2023.10.09</p>
                  </div>
                </div>
                <div class="swiper-slide show-item">
                  <a href="#">
                    <img
                      src="./images/main/전시안내/3.jpg"
                      alt="귀얄과 분장의 묘미"
                    />
                  </a>
                  <div class="show-txt">
                    <div class="show-bg">
                      <span class="show-bg-black">전시중</span>
                      <span class="show-bg-white">테마전</span>
                    </div>
                    <a href="#">분청사기·백자실 심화 전시</a>
                    <p>2022.07.22~2024.01.28</p>
                  </div>
                </div>
                <div class="swiper-slide show-item">
                  <a href="#">
                    <img
                      src="./images/main/전시안내/4.jpg"
                      alt="백제 명품, 백제 문양전"
                    />
                  </a>
                  <div class="show-txt">
                    <div class="show-bg">
                      <span class="show-bg-black">전시중</span>
                    </div>
                    <a href="#">백제 명품, 백제 문양전</a>
                    <p>2023.05.16~2024.03.29</p>
                  </div>
                </div>
                <div class="swiper-slide show-item">
                  <a href="#">
                    <img
                      src="./images/main/전시안내/5.jpg"
                      alt="고故 이건희 회장 기증 국립청주박물관 특별전 어느 수집가의 초대"
                    />
                  </a>
                  <div class="show-txt">
                    <div class="show-bg">
                      <span class="show-bg-black">전시중</span>
                    </div>
                    <a href="#">고故 이건희 회장 기증 기념 특별전</a>
                    <p>2023.07.25~2023.10.29</p>
                  </div>
                </div>
                <div class="swiper-slide show-item">
                  <a href="#">
                    <img
                      src="./images/main/전시안내/6.jpg"
                      alt="아주 특별한 순간- 그림으로 남기다"
                    />
                  </a>
                  <div class="show-txt">
                    <div class="show-bg">
                      <span class="show-bg-black">전시중</span>
                    </div>
                    <a href="#">아주 특별한 순간- 그림으로 남기다</a>
                    <p>2023.08.01~2023.10.29</p>
                  </div>
                </div>
                <div class="swiper-slide show-item">
                  <a href="#">
                    <img
                      src="./images/main/전시안내/7.jpg"
                      alt="독널, 흙으로 만든 안식처, 국립나주박물관 기획전시실"
                    />
                  </a>
                  <div class="show-txt">
                    <div class="show-bg">
                      <span class="show-bg-black">전시중</span>
                    </div>
                    <a href="#">특별전<흙으로 만든 안식처, 독널></a>
                    <p>2023.06.27~2023.10.29</p>
                  </div>
                </div>
                <div class="swiper-slide show-item">
                  <a href="#">
                    <img
                      src="./images/main/전시안내/8.jpg"
                      alt="명기, 예를 담다 국립대구박물관 상설전시관"
                    />
                  </a>
                  <div class="show-txt">
                    <div class="show-bg">
                      <span class="show-bg-black">전시중</span>
                    </div>
                    <a href="#">명기明器, 예禮를 담다</a>
                    <p>2022.10.05~2023.12.31</p>
                  </div>
                </div>
                <div class="swiper-slide show-item">
                  <a href="#">
                    <img
                      src="./images/main/전시안내/9.jpg"
                      alt="장소 국립나주박물관 2전시실 개관 2021.12.21.(TUE) 문화재를 지키는 박물관 사람들"
                    />
                  </a>
                  <div class="show-txt">
                    <div class="show-bg">
                      <span class="show-bg-black">전시중</span>
                    </div>
                    <a href="#">문화재를 지키는 박물관 사람들</a>
                    <p>2021.12.21~2024.12.31</p>
                  </div>
                </div>
                <div class="swiper-slide show-item">
                  <a href="#">
                    <img
                      src="./images/main/전시안내/10.jpg"
                      alt="거장의 시선, 사람을 향하다 영국 내셔널갤러리 명화전 국립중앙박물관"
                    />
                  </a>
                  <div class="show-txt">
                    <div class="show-bg">
                      <span class="show-bg-black">전시중</span>
                      <span class="show-bg-white">특별전</span>
                    </div>
                    <a href="#">거장의 시선, 사람을 향하다- 명화전</a>
                    <p>2023.06.02~2023.10.09</p>
                  </div>
                </div>
              </div>
              <div class="show-button-next"></div>
              <div class="show-button-prev"></div>
              <div class="show-pagination"></div>
            </div>
          </div>
        </section>
        <section class="container section-g section-bbs">
          <h2 class="sec-tit">알림</h2>
          <div class="inner">
            <div class="sec-contents tab-notice">
              <h3 class="notice-tit">공지사항</h3>
              <button class="more-btn">더 보기</button>
              <ul class="lst-notice">
                <li>
                  <div class="notice-txt">
                    <a href="#"
                      >[전문·인력모집] 2023년 사립 및 사립대학박물관 전문인력
                      지원사업 11차 공고</a
                    >
                    <span>23.08.16.</span>
                  </div>
                </li>
                <li>
                  <div class="notice-txt">
                    <a href="#"
                      >[전문·발표] 2023년 사립 및 사립대학박물관 전문인력
                      지원사업 3차 선정관 공고</a
                    >
                    <span>23.08.16.</span>
                  </div>
                </li>
                <li>
                  <div class="notice-txt">
                    <a href="#"
                      >2023년 박물관 미술관 발전 유공 포상후보자 추천 공고
                      안내</a
                    >
                    <span>23.08.08.</span>
                  </div>
                </li>
              </ul>
            </div>
            <div class="sec-contents tab-news">
              <h3 class="news-tit">회원관 소식</h3>
              <button class="more-btn">더 보기</button>
              <ul class="lst-news">
                <li>
                  <div class="news-txt">
                    <a href="#"
                      >[국립현대미술관] 장욱진 최초의 <가족> 발굴 및 소장
                    </a>
                    <span>23.08.16.</span>
                  </div>
                </li>
                <li>
                  <div class="news-txt">
                    <a href="#"
                      >[여주곤충박물관] 특별전 <한글 속 곤충, 곤충 속 한글> 개최
                    </a>
                    <span>23.08.16.</span>
                  </div>
                </li>
                <li>
                  <div class="news-txt">
                    <a href="#"
                      >[풀짚공예박물관] 기획전 <풀 엮고 흙 빚어 > 개최</a
                    >
                    <span>23.08.16.</span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </section>
        <section class="container section-g section-bnr">
          <h2 class="sec-tit">추진사업 안내</h2>
          <div class="inner">
            <div class="sec-contents">
              <div class="goto-bnr">
                <a href="#">
                  <img
                    src="./images/main/추진사업 안내/bnr1.jpg"
                    alt="사립 및 사립대학박물관 전문인력 지원사업"
                  />
                  <span
                    >사립 및 사립대학박물관 <br />
                    전문인력 지원사업</span
                  >
                </a>
              </div>
              <div class="goto-bnr">
                <a href="#">
                  <img
                    src="./images/main/추진사업 안내/bnr2.jpg"
                    alt="사립 및 사립대학박물관 예비 학예인력 지원사업"
                  />
                  <span
                    >사립 및 사립대학박물관 <br />
                    예비 학예인력 지원사업</span
                  >
                </a>
              </div>
              <div class="goto-bnr">
                <a href="#">
                  <img
                    src="./images/main/추진사업 안내/bnr3.jpg"
                    alt="박물관 길위의 인문학"
                  />
                  <span>박물관 길위의 인문학</span>
                </a>
              </div>
              <div class="goto-bnr">
                <a href="#">
                  <img
                    src="./images/main/추진사업 안내/bnr4.jpg"
                    alt="공·사립·대학 박물관 국가문화유산 DB화 사업"
                  />
                  <span
                    >공·사립·대학 박물관 <br />
                    국가문화유산 DB화 사업</span
                  >
                </a>
              </div>
              <div class="goto-bnr">
                <a href="#">
                  <img
                    src="./images/main/추진사업 안내/bnr5.jpg"
                    alt="「KB Dream Wave 2030」과 함께하는 박물관 노닐기"
                  />
                  <span>「KB Dream Wave 2030」과 함께하는 박물관 노닐기</span>
                </a>
              </div>
              <div class="goto-bnr">
                <a href="#">
                  <img
                    src="./images/main/추진사업 안내/bnr6.jpg"
                    alt="박물관 문화가 있는 날"
                  />
                  <span>박물관 문화가 있는 날</span>
                </a>
              </div>
            </div>
          </div>
        </section>
        <section class="container section-g section-work">
          <h2 class="sec-tit">협회 네트워크</h2>
          <div class="inner">
            <div class="img-map">
              <img src="./images/main/지도31.png" alt="대한민국 지도" />
            </div>
            <div class="txt-work">
              <h3>발전기금 및 입회안내</h3>
              <div class="txt-work-lst">
                <strong>정회원</strong>
                <p class="txt-work-p">
                  비영리 목적으로 설립 된 박물관 및 미술관
                </p>
                <div class="txt-work-box">
                  <div>
                    <p>입회비</p>
                    <span>200만원</span>
                  </div>
                  <div>
                    <p>연회비</p>
                    <span>30만원</span>
                  </div>
                </div>
              </div>
              <div class="txt-work-lst">
                <strong>개인회원</strong>
                <p class="txt-work-p">협회 사업에 관심이 있는 개인</p>
                <div class="txt-work-box">
                  <div>
                    <p>입회비</p>
                    <span>없음</span>
                  </div>
                  <div>
                    <p>연회비</p>
                    <span>일반 3만원 | 학생 1.5만원</span>
                  </div>
                </div>
              </div>
              <div class="sec-work-goto">
                <button type="button" class="work-goto-btn">
                  입회안내 바로가기
                </button>
              </div>
              <div class="sec-work-tel">
                <span class="work-g-tel"
                  >문의(회원가입 담당자) 02-795-0959</span
                >
              </div>
            </div>
          </div>
        </section>
      </main>
      <footer data-include-path="./outline/footer.html"></footer>
    </div>

<div class="latest_top_wr">
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
	echo latest('pic_list', 'notice', 4, 23);		// 최소설치시 자동생성되는 공지사항게시판
    ?>
</div>

<?php
include_once(G5_PATH.'/tail.php');