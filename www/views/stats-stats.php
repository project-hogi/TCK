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
		<table class="table-primary table-select">
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
	<div class="con-area">
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
					<table class="table-bill">
						<colgroup>
							<col width="7.14%">
							<col width="7.14%">
							<col width="7.14%">
							<col width="7.14%">
							<col width="7.14%">
							<col width="7.14%">
							<col width="7.14%">
							<col width="7.14%">
							<col width="7.14%">
							<col width="7.14%">
							<col width="7.14%">
							<col width="7.14%">
							<col width="7.14%">
							<col width="7.14%">
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
								일자
							</th>
							<th>
								시간
							</th>
							<th>
								총 인입건
							</th>
							<th>
								상담사 완료건
							</th>
							<th>
								상담사 연결 포기건
							</th>
							<th>
								자동종료건
							</th>
							<th>
								상담사 응대율
							</th>
							<th>
								서비스레벨
							</th>
							<th>
								CPH
							</th>
							<th>
								AHT
							</th>
							<th>
								고객무응답 시간
							</th>
							<th>
								동시 채팅
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
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								평균
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>

						</tfoot>
						<tbody>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</form>
	</div>

<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>