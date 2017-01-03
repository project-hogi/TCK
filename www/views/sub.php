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
			<li>
				<a href="#tab3">
					<span>
						차단 설정
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
				<li class="active">
					<a href="#tab2-1">
						<span>
							인입 유형 관리
						</span>
					</a>
				</li>
				<li>
					<a href="#tab2-2">
						<span>
							FAQ 관리
						</span>
					</a>
				</li>
			</ul>
		</div>
		<div id="tab2-1" class="tab-content depth-2 active">
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
					</div>
				</div>
			</div>
			<div class="submit-area">
				<button type="submit" class="submit">
					확인
				</button>
			</div>

		</div>
		<div id="tab2-2" class="tab-content depth-2">
			<span>
				tab2-2
			</span>
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