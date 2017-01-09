<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>

	<form action="">
		<div class="search-box">
			<div class="text-box">
				<label for="" class="sr-only">회사명 검색창</label>
				<input type="text" class="form-control" placeholder="회사명">
			</div>
			<div class="select-box">
				<label for="select" class="select-label"><span>선택하세요</span></label>
				<select name="" id="select" class="form-control">
					<option value="">선택하세요</option>
					<option value="">옵션1</option>
					<option value="">옵션2</option>
					<option value="">옵션3</option>
				</select>
			</div>
			<button type="submit" class="submit-btn">
				<span class="sr-only">
					검색버튼
				</span>
			</button>
			<button type="button" class="all-btn">
				<span>
					전체
				</span>
			</button>
		</div>
	</form>
	<div class="result-box">
		<table class="table-primary table-strip">
			<thead>
			<tr>
				<th>번호</th>
				<th>회사명</th>
				<th>프로젝트</th>
				<th>발신프로필</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>01</td>
				<td>트랜스코스모스 코리아</td>
				<td class="text-left">A-01 비즈 메시지센터 프로젝트(Contact Center Infra Service)</td>
				<td>@Biz_tck__a001</td>
			</tr>
			<tr>
				<td>02</td>
				<td>(주)일렉트릭 코리아</td>
				<td class="text-left">웹구축, 모바일, SNS, 인터넷광고, EC운영지원 등을 활용하여 고객기업의 eBusiness Needs에 부합하는 최적의 마케팅</td>
				<td>@Biz_tck__a002</td>
			</tr>
			<tr>
				<td>03</td>
				<td></td>
				<td class="text-left">고품질의 Work flow를 제공하는 컨설팅 역량과 최첨단 시스템</td>
				<td>@Biz_tck__a003</td>
			</tr>
			<tr>
				<td>04</td>
				<td></td>
				<td class="text-left">A-02 비즈 메시지센터 프로젝트</td>
				<td>@Biz_tck__a004</td>
			</tr>
			<tr>
				<td>05</td>
				<td></td>
				<td class="text-left">A-03 비즈 메시지센터 프로젝트</td>
				<td>@Biz_tck__a005</td>
			</tr>
			</tbody>
		</table>
	</div>
	<div class="result-foot">
		<div class="page-control">
			<a href="#" class="prev">이전</a>
			<ul class="pagination">
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
			</ul>
			<a href="#" class="next">다음</a>
		</div>
	</div>
	<!-- tab-menu -->
	<div class="tab-menu depth-1">
		<ul>
			<li>
				<a href="#tab1">
					<span>
						상담 운영 설정
					</span>
				</a>
			</li>
			<li class="active">
				<a href="#tab2">
					<span>
						챗봇 설정
					</span>
				</a>
			</li>
		</ul>
	</div>
	<div id="tab1" class="tab-content">
		<span>
			tab1
		</span>

	</div>
	<div id="tab2" class="tab-content active">
		<div class="tab-menu depth-2">
			<ul>
				<li>
					<a href="#tab2-1">
						<span>
							인입 유형 관리
						</span>
					</a>
				</li>
				<li class="active">
					<a href="#tab2-2">
						<span>
							키워드 자동 응답
						</span>
					</a>
				</li>
			</ul>
		</div>
		<div id="tab2-1" class="tab-content depth-2">
			<form action="">
			<div class="tab-menu depth-3">
				<ul>
					<li class="active">
						<a href="#tab2-1-1">
						<span>
							인입 유형 사용 유/무
						</span>
						</a>
					</li>
				</ul>
			</div>

			<div id="tab2-1-1" class="tab-content depth-3 active">
				<div class="classify-option">
					<input type="radio" id="option-on" name="classify-option">
					<label for="option-on">ON</label>
					<input type="radio" id="option-off" name="classify-option" checked>
					<label for="option-off">OFF</label>
				</div>
				<div class="classify-area">
					<div class="classify col-xs-4">
						<div class="tit">
					<span>
						1차 유형(대분류)
					</span>
						</div>
						<div class="con">
							<ul class="list-classify">
								<li>
									<a href="#">
								<span>
									대분류 리스트1
								</span>
									</a>
								</li>
								<li class="active">
									<a href="#">
								<span>
									대분류 리스트2
								</span>
									</a>
								</li>
								<li>
									<a href="#">
								<span>
									대분류 리스트3
								</span>
									</a>
								</li>
								<li>
									<a href="#">
								<span>
									대분류 리스트4
								</span>
									</a>
								</li>
								<li>
									<a href="#">
								<span>
									대분류 리스트5
								</span>
									</a>
								</li>
								<li>
									<a href="#">
								<span>
									대분류 리스트6
								</span>
									</a>
								</li>
								<li>
									<a href="#">
								<span>
									대분류 리스트7
								</span>
									</a>
								</li>
							</ul>
						</div>
						<div class="foot">
							<div class="add col-xs-6">
								<a href="#">
							<span>
								추가
							</span>
								</a>
							</div>
							<div class="delete col-xs-6">
								<a href="#">
							<span>
								삭제
							</span>
								</a>
							</div>
							<div class="check col-xs-12 bdln">
								<a href="#">
								<input type="checkbox" id="adviser-1">
								<label for="adviser-1">
								<span>
									상담원 연결
								</span>
								</label>
								</a>
							</div>
						</div>
					</div>
					<div class="classify col-xs-4">
						<div class="tit">
					<span>
						2차 유형(중분류)
					</span>
						</div>
						<div class="con">
							<ul class="list-classify">
								<li>
									<a href="#">
								<span>
									대분류 리스트2
								</span>
										<span>
									중분류 리스트1
								</span>
									</a>
								</li>
								<li>
									<a href="#">
								<span>
									대분류 리스트2
								</span>
										<span>
									중분류 리스트2
								</span>
									</a>
								</li>
								<li class="active">
									<a href="#">
								<span>
									대분류 리스트2
								</span>
										<span>
									중분류 리스트3
								</span>
									</a>
								</li>
								<li>
									<a href="#">
								<span>
									대분류 리스트2
								</span>
										<span>
									중분류 리스트4
								</span>
									</a>
								</li>
								<li>
									<a href="#">
								<span>
									대분류 리스트2
								</span>
										<span>
									중분류 리스트5
								</span>
									</a>
								</li>
								<li>
									<a href="#">
								<span>
									대분류 리스트2
								</span>
										<span>
									중분류 리스트6
								</span>
									</a>
								</li>
								<li>
									<a href="#">
								<span>
									대분류 리스트2
								</span>
										<span>
									중분류 리스트7
								</span>
									</a>
								</li>
							</ul>
						</div>
						<div class="foot">
							<div class="add col-xs-6">
								<a href="#">
							<span>
								추가
							</span>
								</a>
							</div>
							<div class="delete col-xs-6">
								<a href="#">
							<span>
								삭제
							</span>
								</a>
							</div>
							<div class="check col-xs-12 bdln">
								<a href="#">
								<input type="checkbox" id="adviser-2">
								<label for="adviser-2">
								<span>
									상담원 연결
								</span>
								</label>
								</a>
							</div>
						</div>
					</div>
					<div class="classify col-xs-4">
						<div class="tit">
					<span>
						3차 유형(소분류)
					</span>
						</div>
						<div class="con">
							<ul class="list-classify">
								<li>
									<a href="#">
								<span>
									대분류 리스트2
								</span>
										<span>
									중분류 리스트3
								</span>
										<span>
									소분류 리스트1
								</span>
									</a>
								</li>
								<li>
									<a href="#">
								<span>
									대분류 리스트2
								</span>
										<span>
									중분류 리스트3
								</span>
										<span>
									소분류 리스트2
								</span>
									</a>
								</li>
								<li>
									<a href="#">
								<span>
									대분류 리스트2
								</span>
										<span>
									중분류 리스트3
								</span>
										<span>
									소분류 리스트3
								</span>
									</a>
								</li>
								<li>
									<a href="#">
								<span>
									대분류 리스트2
								</span>
										<span>
									중분류 리스트3
								</span>
										<span>
									소분류 리스트4
								</span>
									</a>
								</li>
								<li>
									<a href="#">
								<span>
									대분류 리스트2
								</span>
										<span>
									중분류 리스트3
								</span>
										<span>
									소분류 리스트5
								</span>
									</a>
								</li>
								<li>
									<a href="#">
								<span>
									대분류 리스트2
								</span>
										<span>
									중분류 리스트3
								</span>
										<span>
									소분류 리스트6
								</span>
									</a>
								</li>
								<li>
									<a href="#">
								<span>
									대분류 리스트2
								</span>
										<span>
									중분류 리스트3
								</span>
										<span>
									소분류 리스트7
								</span>
									</a>
								</li>
							</ul>
						</div>
						<div class="foot">
							<div class="add col-xs-6">
								<a href="#">
							<span>
								추가
							</span>
								</a>
							</div>
							<div class="delete col-xs-6">
								<a href="#">
							<span>
								삭제
							</span>
								</a>
							</div>
							<div class="check col-xs-12 bdln">
								<a href="#">
								<input type="checkbox" id="adviser-3">
								<label for="adviser-3">
								<span>
									상담원 연결
								</span>
								</label>
								</a>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="submit-area">
				<button type="submit" class="submit">
					확인
				</button>
			</div>
			</form>
		</div>
		<div id="tab2-2" class="tab-content depth-2 active">

			<form action="">
				<div class="tab-menu depth-3">
					<ul>
						<li>
							<a href="#tab2-2-1">
						<span>
							키워드 자동 응답
						</span>
							</a>
						</li>
						<li>
							<a href="#tab2-2-2">
						<span>
							자동 메세지 관리
						</span>
							</a>
						</li>
						<li class="active">
							<a href="#tab2-2-3">
						<span>
							채팅 유도 설정
						</span>
							</a>
						</li>
					</ul>
				</div>

				<div id="tab2-2-1" class="tab-content depth-3">
					<div class="search-type">
						<ul class="list-type">
							<li>
								<a href="#">
									<span>
										키워드
									</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span>
										인입유형 대
									</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span>
										인입유형 중
									</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span>
										인입유형 소
									</span>
								</a>
							</li>
						</ul>
						<div class="list-btn">
							<ul>
								<li class="search">
									<a href="#">
										<span class="sr-only">
											검색
										</span>
									</a>
								</li>
								<li class="return">
									<a href="#">
										<span class="sr-only">
											다시작성
										</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="search-box">
						<button type="button" class="all-btn">
							<span>
								등록
							</span>
						</button>
						<button type="button" class="all-btn">
							<span>
								사용
							</span>
						</button>
						<button type="button" class="all-btn">
							<span>
								사용안함
							</span>
						</button>
					</div>
					<div class="result-box">
						<ul class="list-title-area has-9item">
							<li class="select">
								<label for="">
									<input type="checkbox">
									선택
								</label>
							</li>
							<li class="keyword">
								<a href="">
									키워드
								</a>
							</li>
							<li class="use">
								<a href="">
								사용여부
								</a>
							</li>
							<li class="large">
								<a href="">
								인입유형 대
								</a>
							</li>
							<li class="middle">
								<a href="">
								인입유형 중
								</a>
							</li>
							<li class="small">
								<a href="">
								인입유형 소
								</a>
							</li>
							<li class="relevant">
								<a href="">
								관련상품
								</a>
							</li>
							<li class="last-update">
								<a href="">
								최종 수정자
								</a>
							</li>
							<li class="last-update-time">
								<a href="">
								최종 수정일시
								</a>
							</li>
						</ul>
						<div class="list-wrap">
							<ul class="list-content-area has-9item">
								<li>
									<ul class="list">
										<li class="select">
											<label for=""></label>
											<input type="checkbox">
										</li>
										<li class="keyword">
											홍길동
										</li>
										<li class="use">
											lorem
										</li>
										<li class="large">
											홍길동
										</li>
										<li class="middle">

											홍길동
										</li>
										<li class="small">

											홍길동
										</li>
										<li class="relevant">

											홍길동
										</li>
										<li class="last-update">

											홍길동
										</li>
										<li class="last-update-time">

											홍길동
										</li>
									</ul>
								</li>
								<li>
									<ul class="list">
										<li class="select">
											<label for=""></label>
											<input type="checkbox">
										</li>
										<li class="keyword">
											홍길동
										</li>
										<li class="use">
											lorem
										</li>
										<li class="large">
											홍길동
										</li>
										<li class="middle">

											홍길동
										</li>
										<li class="small">

											홍길동
										</li>
										<li class="relevant">

											홍길동
										</li>
										<li class="last-update">

											홍길동
										</li>
										<li class="last-update-time">

											홍길동
										</li>
									</ul>
								</li>
								<li>
									<ul class="list">
										<li class="select">
											<label for=""></label>
											<input type="checkbox">
										</li>
										<li class="keyword">
											홍길동
										</li>
										<li class="use">
											lorem
										</li>
										<li class="large">
											홍길동
										</li>
										<li class="middle">

											홍길동
										</li>
										<li class="small">

											홍길동
										</li>
										<li class="relevant">

											홍길동
										</li>
										<li class="last-update">

											홍길동
										</li>
										<li class="last-update-time">

											홍길동
										</li>
									</ul>
								</li>
								<li>
									<ul class="list">
										<li class="select">
											<label for=""></label>
											<input type="checkbox">
										</li>
										<li class="keyword">
											홍길동
										</li>
										<li class="use">
											lorem
										</li>
										<li class="large">
											홍길동
										</li>
										<li class="middle">

											홍길동
										</li>
										<li class="small">

											홍길동
										</li>
										<li class="relevant">

											홍길동
										</li>
										<li class="last-update">

											홍길동
										</li>
										<li class="last-update-time">

											홍길동
										</li>
									</ul>
								</li>
								<li>
									<ul class="list">
										<li class="select">
											<label for=""></label>
											<input type="checkbox">
										</li>
										<li class="keyword">
											홍길동
										</li>
										<li class="use">
											lorem
										</li>
										<li class="large">
											홍길동
										</li>
										<li class="middle">

											홍길동
										</li>
										<li class="small">

											홍길동
										</li>
										<li class="relevant">

											홍길동
										</li>
										<li class="last-update">

											홍길동
										</li>
										<li class="last-update-time">

											홍길동
										</li>
									</ul>
								</li>
							</ul>
						</div>

						<table class="table-form">
							<tbody>
							<tr>
								<th>
									인업유형
								</th>
								<td class="text-left">
									<div class="search-box type-2">
										<div class="select-box w255">
											<label for="select" class="select-label"><span>선택하세요</span></label>
											<select name="" id="select" class="form-control">
												<option value="">선택하세요</option>
												<option value="">옵션1</option>
												<option value="">옵션2</option>
												<option value="">옵션3</option>
											</select>
										</div>
										<div class="select-box w255">
											<label for="select" class="select-label"><span>선택하세요</span></label>
											<select name="" id="select" class="form-control">
												<option value="">선택하세요</option>
												<option value="">옵션1</option>
												<option value="">옵션2</option>
												<option value="">옵션3</option>
											</select>
										</div>
										<div class="select-box w255">
											<label for="select" class="select-label"><span>선택하세요</span></label>
											<select name="" id="select" class="form-control">
												<option value="">선택하세요</option>
												<option value="">옵션1</option>
												<option value="">옵션2</option>
												<option value="">옵션3</option>
											</select>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>
									키워드
								</th>
								<td class="text-left">

								</td>
							</tr>
							<tr>
								<th>
									관련상품
								</th>
								<td class="text-left">

								</td>
							</tr>
							<tr>
								<th>
									세부내용
								</th>
								<td class="text-left">
									<div class="textarea-style">
										text-editer

									</div>
								</td>
							</tr>
							</tbody>

						</table>

					</div>
					<div class="submit-area">
						<button type="submit" class="submit">
							저장
						</button>
						<button type="button" class="edit">
							편집
						</button>
					</div>

				</div>
				<div id="tab2-2-2" class="tab-content depth-3">
					<table class="table-form">
						<col width="180">
						<col width="*">
						<col width="">
						<col width="175">
						<thead>
						<tr>
							<th>
								항목
							</th>
							<th>
								카카오 기본 제공 메시지(발송 시점)
							</th>
							<th>
								추가 자동 메시지
							</th>
							<th>
								사용여부
							</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<th>
								첫인사
							</th>
							<td class="text-left">
								<strong class="orange-tit">
									상담 시작 메시지 (대화 세션 시작 시)
								</strong>
								<span class="pre">
									1:1 채팅을 시작합니다. 채팅 내용은 상담 품질 관리를 위해 {#위탁사명}에 저장됩니다. 대화를 원치 않으시면 대화방 나가기를 해주세요.
								</span>
							</td>
							<td class="text-left">
								<div class="textarea-type">
									고객님, 안녕하세요. {#프로젝트명} 고객센터입니다. 원하시는 서비스를 입력해주시기 바랍니다.
								</div>
							</td>
							<td>
								<div class="button-edit">
									<button type="button">
										편집하기
									</button>
									<div class="switch">
										<input type="radio" name="switch-0" id="switch1-0" class="switch1" checked>
										<label for="switch1-0">
											ON
										</label>
										<input type="radio" name="switch-0" id="switch0-0" class="switch0">
										<label for="switch0-0">
											OFF
										</label>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<th>
								상담불가
							</th>
							<td class="text-left">
								<strong class="orange-tit">
									응답 실패 메시지 (딜러사 서버 응답이 오지 않을 시)
								</strong>
								<span class="pre">
									#{발신프로필명}와/과의 연결이 원활하지 않습니다.<br>잠시 후 다시 채팅을 요청해주세요.
								</span>
							</td>
							<td class="text-left">
								<div class="textarea-type">
									불편을 드려 죄송합니다.
								</div>
							</td>
							<td>
								<div class="button-edit">
									<button type="button">
										편집하기
									</button>
									<div class="switch">
										<input type="radio" name="switch-1" id="switch1-1" class="switch1" checked>
										<label for="switch1-1">
											ON
										</label>
										<input type="radio" name="switch-1" id="switch0-1" class="switch0">
										<label for="switch0-1">
											OFF
										</label>
									</div>
								</div>
							</td>
						</tr>



						<tr>
							<th>
								상담사 연결 지연
							</th>
							<td class="text-left">
								<strong class="orange-tit">
									상담 지연 메시지 (상담사 연결 지연 고지 설정시간)
								</strong>
								<span class="pre">
									상담원 연결이 지연되고 있습니다. 잠시 후 다시 이용해주세요
								</span>
							</td>
							<td class="text-left">
								<div class="textarea-type">
									현재 대기 중인 고객님 수는 {대기자 수}명 입니다.
								</div>
							</td>
							<td>
								<div class="button-edit">
									<button type="button">
										편집하기
									</button>
									<div class="switch">
										<input type="radio" name="switch-2" id="switch1-2" class="switch1" checked>
										<label for="switch1-2">
											ON
										</label>
										<input type="radio" name="switch-2" id="switch0-2" class="switch0">
										<label for="switch0-2">
											OFF
										</label>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<th>
								근무외 시간처리
							</th>
							<td class="text-left">
								<strong class="orange-tit">
									상담 부재 메시지 (근무 시간 외 채팅 인입 시)
								</strong>
								<span class="pre">
									지금은 상담 가능 시간이 아닙니다.
								</span>
							</td>
							<td class="text-left">
								<div class="textarea-type">
									상담을 원하시면 {근무시간} 중에 연락 주시기 바랍니다.
								</div>
							</td>
							<td>
								<div class="button-edit">
									<button type="button">
										편집하기
									</button>
									<div class="switch">
										<input type="radio" name="switch-3" id="switch1-3" class="switch1" checked>
										<label for="switch1-3">
											ON
										</label>
										<input type="radio" name="switch-3" id="switch0-3" class="switch0">
										<label for="switch0-3">
											OFF
										</label>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<th>
								자동 종료 1차 고지
							</th>
							<td class="text-left">
								<strong class="orange-tit">
									없음 (자동종료 1차 고지 설정시간)
								</strong>
								<span class="pre">

								</span>
							</td>
							<td class="text-left">
								<div class="textarea-type">
									고객님의 무응답 시간이 길어질 경우 {자동종료시간}후에 자동 종료됩니다.
								</div>
							</td>
							<td>
								<div class="button-edit">
									<button type="button">
										편집하기
									</button>
									<div class="switch">
										<input type="radio" name="switch-4" id="switch1-4" class="switch1" checked>
										<label for="switch1-4">
											ON
										</label>
										<input type="radio" name="switch-4" id="switch0-4" class="switch0">
										<label for="switch0-4">
											OFF
										</label>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<th>
								자동종료
							</th>
							<td class="text-left">
								<strong class="orange-tit">
									무응답 종료 메시지 (자동종료시간 설정시간)
								</strong>
								<span class="pre">
									일정 시간 동안 고객님의 응답이 없어 채팅을 종료합니다.
								</span>
							</td>
							<td class="text-left">
								<div class="textarea-type">
									상담을 원하시면 다시 채팅을 요청해주세요.
								</div>
							</td>
							<td>
								<div class="button-edit">
									<button type="button">
										편집하기
									</button>
									<div class="switch">
										<input type="radio" name="switch-5" id="switch1-5" class="switch1" checked>
										<label for="switch1-5">
											ON
										</label>
										<input type="radio" name="switch-5" id="switch0-5" class="switch0">
										<label for="switch0-5">
											OFF
										</label>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<th>
								상담종료시 액션
							</th>
							<td class="text-left">
								<strong class="orange-tit">
									무응답 종료 메시지 (대화 종료 시)
								</strong>
								<span class="pre">

								</span>
							</td>
							<td class="text-left">
								<div class="textarea-type">
									상담사와의 대화는 어떠셨나요?
									{고객만족도 조사 URL}
								</div>
							</td>
							<td>
								<div class="button-edit">
									<button type="button">
										편집하기
									</button>
									<div class="switch">
										<input type="radio" name="switch-6" id="switch1-6" class="switch1" checked>
										<label for="switch1-6">
											ON
										</label>
										<input type="radio" name="switch-6" id="switch0-6" class="switch0">
										<label for="switch0-6">
											OFF
										</label>
									</div>
								</div>
							</td>
						</tr>

						</tbody>

					</table>
				</div>
				<div id="tab2-2-3" class="tab-content depth-3 active">
					<div class="left-list">
						<div class="tit">
							항목리스트
						</div>
						<div class="con">
							<ul class="list">
								<li>
									<a href="#">
										<span>
											이벤트
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span>
											고객센터
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span>
											세일
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span>
											세일
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span>
											세일
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span>
											세일
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span>
											세일
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span>
											세일
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span>
											세일
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span>
											세일
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span>
											세일
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span>
											세일
										</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="right-list">
						<table class="table-primary detail">
							<col width="185">
							<col width="*">
							<thead>
							<tr>
								<th colspan="2">
									세부설정
								</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<th>
									제목
								</th>
								<td>
									<div class="form-group">
										<input type="text" class="form-control w100p">
									</div>
								</td>
							</tr>
							<tr>
								<th>
									URL
								</th>
								<td>
									<div class="form-group">
										<input type="text" class="form-control w100p">
									</div>
								</td>
							</tr>
							<tr>
								<th>
									동작
								</th>
								<td>
									<div class="form-group select-box w230">
										<select name="" id="" class="form-control">
											<option value=""></option>
											<option value="">옵션1</option>
											<option value="">옵션2</option>
											<option value="">옵션3</option>
										</select>
									</div>
								</td>
							</tr>
							<tr>
								<th>
									내용
								</th>
								<td>
									<textarea name="" id="" cols="30" rows="10" class="form-control" style="resize: none;"></textarea>
								</td>
							</tr>
							</tbody>

						</table>
					</div>

				</div>
				<div class="submit-area">
					<button type="submit" class="submit">
						저장
					</button>
					<button type="button" class="edit">
						편집
					</button>
					<button type="button" class="delete">
						삭제
					</button>
				</div>


			</form>

		</div>

	</div>
	<div id="tab3" class="tab-content">

		<span>
			tab3
		</span>
	</div>

















<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>