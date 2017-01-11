<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>

	<form action="">
		<div class="search-box">
			<button type="button" class="all-btn">
				<span>
					전체
				</span>
			</button>
			<button type="button" class="all-btn">
				<span>
					회사
				</span>
			</button>
			<button type="button" class="all-btn">
				<span>
					PJ
				</span>
			</button>
			<div class="text-box ml10">
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
						통계지표
					</span>
				</a>
			</li>
			<li class="active">
				<a href="#tab2">
					<span>
						대시보드설정
					</span>
				</a>
			</li>
		</ul>
	</div>
	<!-- tab1 -->
	<div id="tab1" class="tab-content">
		<div class="tab-menu depth-2">
			<ul>
				<li class="active">
					<a href="#tab1-1">
						<span>
							일자별 통계
						</span>
					</a>
				</li>
				<li>
					<a href="#tab1-2">
						<span>
							시간대별 통계
						</span>
					</a>
				</li>
				<li>
					<a href="#tab1-3">
						<span>
							인입유형별통계
						</span>
					</a>
				</li>
			</ul>
		</div>
		<div id="tab1-1" class="tab-content depth-2 active">
			<form action="">
				<div class="content-box">
					<button type="submit" class="btn-type">
							<span>
								연도
							</span>
					</button>
					<button type="submit" class="btn-type">
							<span>
								일
							</span>
					</button>
					<button type="submit" class="btn-type">
							<span>
								월
							</span>
					</button>
					<div class="date-option ml10">
						<input class="datepicker" data-date-format="mm/dd/yyyy">
					</div>
					<span>~<span class="sr-only">부터</span></span>
					<div class="date-option">
						<input class="datepicker" data-date-format="mm/dd/yyyy">
					</div>
					<span class="sr-only">까지</span>
					<button type="submit" class="btn-type btn-search">
							<span class="sr-only">
								검색
							</span>
					</button>
					<div class="count-area">
						<div class="month">
							<strong>
								11
							</strong>
							월
						</div>
						<div class="won">
							총 금액
							<strong>
								1,5000,000
							</strong>
							원
						</div>
					</div>
				</div>
				<div class="bill-board">
					<div class="bill-title">
						<strong>
							과금내역
						</strong>
					</div>
					<div class="bill-con">
						<div class="text-right">
							<button type="submit" class="btn-type">
							<span>
								다운로드
							</span>
							</button>
						</div>
						<table class="table-bill">
							<colgroup>
								<col width="12.5%">
								<col width="12.5%">
								<col width="12.5%">
								<col width="12.5%">
								<col width="12.5%">
								<col width="12.5%">
								<col width="12.5%">
								<col width="12.5%">
							</colgroup>
							<thead>
							<tr>
								<th>
									회사
								</th>
								<th>
									프로젝트
								</th>
								<th>
									연도
								</th>
								<th>
									월
								</th>
								<th>
									일
								</th>
								<th>
									비과금 건 수
								</th>
								<th>
									과금 건 수
								</th>
								<th>
									과금 비용
								</th>
							</tr>
							</thead>
							<tfoot>
							<tr>
								<td>
									합계
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>50,000,000</td>
								<td>1,000,000</td>
								<td>100,000,000</td>
							</tr>
							<tr>
								<td>
									평균
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>4,166,666</td>
								<td>83,333</td>
								<td>8,333,333</td>
							</tr>

							</tfoot>
							<tbody>
							<tr>
								<td></td>
								<td></td>
								<td>2015</td>
								<td>1</td>
								<td></td>
								<td>4,166,667</td>
								<td>83,334</td>
								<td>8,333,400</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>2015</td>
								<td>2</td>
								<td></td>
								<td>4,166,667</td>
								<td>83,334</td>
								<td>8,333,400</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>2015</td>
								<td>3</td>
								<td></td>
								<td>4,166,667</td>
								<td>83,334</td>
								<td>8,333,400</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>2015</td>
								<td>4</td>
								<td></td>
								<td>4,166,667</td>
								<td>83,334</td>
								<td>8,333,400</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>2015</td>
								<td>5</td>
								<td></td>
								<td>4,166,667</td>
								<td>83,334</td>
								<td>8,333,400</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>2015</td>
								<td>6</td>
								<td></td>
								<td>4,166,667</td>
								<td>83,334</td>
								<td>8,333,400</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>2015</td>
								<td>7</td>
								<td></td>
								<td>4,166,667</td>
								<td>83,334</td>
								<td>8,333,400</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>2015</td>
								<td>8</td>
								<td></td>
								<td>4,166,667</td>
								<td>83,334</td>
								<td>8,333,400</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>2015</td>
								<td>9</td>
								<td></td>
								<td>4,166,667</td>
								<td>83,334</td>
								<td>8,333,400</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>2015</td>
								<td>10</td>
								<td></td>
								<td>4,166,667</td>
								<td>83,334</td>
								<td>8,333,400</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
			</form>
		</div>
		<div id="tab1-2" class="tab-content depth-2">
			<form action="">



			</form>
		</div>
		<div id="tab1-3" class="tab-content depth-2">
			<form action="">
				<div class="content-box">
					<button type="submit" class="btn-type">
							<span>
								연도
							</span>
					</button>
					<button type="submit" class="btn-type">
							<span>
								일
							</span>
					</button>
					<button type="submit" class="btn-type">
							<span>
								월
							</span>
					</button>
					<div class="date-option ml10">
						<input class="datepicker" data-date-format="mm/dd/yyyy">
					</div>
					<span>~<span class="sr-only">부터</span></span>
					<div class="date-option">
						<input class="datepicker" data-date-format="mm/dd/yyyy">
					</div>
					<span class="sr-only">까지</span>
					<div class="select-type main">
						<label for="select" class="select-label"><span>유형</span></label>
						<select name="" id="select" class="form-control">
							<option value="">일자별</option>
							<option value="">시간대별</option>
							<option value="">인입유형별</option>
						</select>
					</div>
					<div class="select-type main">
						<label for="select" class="select-label"><span>단위</span></label>
						<select name="" id="select" class="form-control">
							<option value="">5분</option>
							<option value="">10분</option>
							<option value="">15분</option>
							<option value="">30분</option>
							<option value="">60분</option>
						</select>
					</div>
					<button type="submit" class="btn-type btn-search">
							<span class="sr-only">
								검색
							</span>
					</button>
				</div>
				<div class="bill-board">
					<div class="bill-title">
						<strong>
							인입유형별 통계
						</strong>
					</div>
					<div class="summary">
						<table class="table-form">
							<colgroup>
								<col width="25%">
								<col width="25%">
								<col width="25%">
								<col width="25%">
							</colgroup>
							<tbody>
							<tr>
								<th>
									유형
								</th>
								<td>
									인입유형별 통계
								</td>
								<th>
									단위
								</th>
								<td>
									60분
								</td>
							</tr>
							<tr>
								<th>
									기간
								</th>
								<td>
									2016.09.22 ~ 2016.09.22
								</td>
								<th>
									다운로드
								</th>
								<td>
									<a href="#" class="download">
										<span class="sr-only">
											다운로드
										</span>
									</a>
								</td>
							</tr>
							</tbody>
						</table>
					</div>
					<div class="bill-con">
						<div class="text-right">
							<button type="submit" class="btn-type">
							<span>
								다운로드
							</span>
							</button>
						</div>
						<table class="table-bill">
							<colgroup>
								<col width="12.5%">
								<col width="12.5%">
								<col width="12.5%">
								<col width="12.5%">
								<col width="12.5%">
								<col width="12.5%">
								<col width="12.5%">
								<col width="12.5%">
							</colgroup>
							<thead>
							<tr>
								<th>
									회사
								</th>
								<th>
									프로젝트
								</th>
								<th>
									연도
								</th>
								<th>
									월
								</th>
								<th>
									일
								</th>
								<th>
									비과금 건 수
								</th>
								<th>
									과금 건 수
								</th>
								<th>
									과금 비용
								</th>
							</tr>
							</thead>
							<tfoot>
							<tr>
								<td>
									합계
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>50,000,000</td>
								<td>1,000,000</td>
								<td>100,000,000</td>
							</tr>
							<tr>
								<td>
									평균
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>4,166,666</td>
								<td>83,333</td>
								<td>8,333,333</td>
							</tr>

							</tfoot>
							<tbody>
							<tr>
								<td></td>
								<td></td>
								<td>2015</td>
								<td>1</td>
								<td></td>
								<td>4,166,667</td>
								<td>83,334</td>
								<td>8,333,400</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>2015</td>
								<td>2</td>
								<td></td>
								<td>4,166,667</td>
								<td>83,334</td>
								<td>8,333,400</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>2015</td>
								<td>3</td>
								<td></td>
								<td>4,166,667</td>
								<td>83,334</td>
								<td>8,333,400</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>2015</td>
								<td>4</td>
								<td></td>
								<td>4,166,667</td>
								<td>83,334</td>
								<td>8,333,400</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>2015</td>
								<td>5</td>
								<td></td>
								<td>4,166,667</td>
								<td>83,334</td>
								<td>8,333,400</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>2015</td>
								<td>6</td>
								<td></td>
								<td>4,166,667</td>
								<td>83,334</td>
								<td>8,333,400</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>2015</td>
								<td>7</td>
								<td></td>
								<td>4,166,667</td>
								<td>83,334</td>
								<td>8,333,400</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>2015</td>
								<td>8</td>
								<td></td>
								<td>4,166,667</td>
								<td>83,334</td>
								<td>8,333,400</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>2015</td>
								<td>9</td>
								<td></td>
								<td>4,166,667</td>
								<td>83,334</td>
								<td>8,333,400</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>2015</td>
								<td>10</td>
								<td></td>
								<td>4,166,667</td>
								<td>83,334</td>
								<td>8,333,400</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
			</form>
		</div>
	</div>

	<!-- tab2 -->
	<div id="tab2" class="tab-content active">
		<div class="tab-menu depth-3">
			<ul>
				<li class="active">
					<a href="#tab2-1">
						<span>
							대시보드 설정
						</span>
					</a>
				</li>
			</ul>
		</div>
		<div id="tab2-1" class="tab-content depth-3 active">
			<table class="table-dashboard">
				<tbody>
				<tr>
					<th>
						총 인입건
					</th>
					<td>
						<strong>
							3102
						</strong>
						건
					</td>
					<th>
						상담사 인입건
					</th>
					<td>
						<strong>
							2102
						</strong>
						건
					</td>
				</tr>
				<tr>
					<th>
						상담사<br>전체처리건
					</th>
					<td>
						<strong>
							1575
						</strong>
						건
					</td>
					<th>
						상담사 응대율
					</th>
					<td>
						<strong>
							94
						</strong>
						%
					</td>
				</tr>
				<tr>
					<th>
						상담중
					</th>
					<td>
						<strong>
							402
						</strong>
						건
					</td>
					<th>
						대기 건
					</th>
					<td>
						<strong>
							105
						</strong>
						건
					</td>
				</tr>
				</tbody>
			</table>






		</div>
	</div>

















<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>