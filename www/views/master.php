<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>


	<h3 class="content-title">
		조직관리
	</h3>
	<div class="group-box">
		<div class="sidebar">
			<div class="dtree">
				<p class="sr-only"><a href="javascript: d.openAll();">open all</a> | <a href="javascript: d.closeAll();">close all</a></p>
				<script type="text/javascript">
					<!--
					d = new dTree('d');

					d.add(0,-1,'PF V2','#link');
					d.add(1,0,'회사 1','#link');
					d.add(2,1,'프로젝트 1','#link');
					d.add(3,1,'프로젝트 2','#link');
					d.add(4,1,'프로젝트 3','#link');
					d.add(5,0,'프로젝트 4','#link');
					d.add(6,5,'프로젝트 5','#link');
					d.add(7,5,'프로젝트 2','#link');
					d.add(8,5,'프로젝트 2','#link');
					d.add(9,0,'프로젝트 2','#link');
					d.add(10,9,'프로젝트 2','#link');
					d.add(11,9,'프로젝트 2','#link');

					document.write(d);

					//-->
				</script>
			</div>
		</div>
		<div class="content-box">
			<form action="">
				<div class="search-box">
					<div class="select-box w120">
						<label for="select" class="select-label"><span>소속</span></label>
						<select name="" id="select" class="form-control">
							<option value="">소속</option>
							<option value="">옵션1</option>
							<option value="">옵션2</option>
							<option value="">옵션3</option>
						</select>
					</div>
					<div class="select-box w120">
						<label for="select" class="select-label"><span>권한</span></label>
						<select name="" id="select" class="form-control">
							<option value="">권한</option>
							<option value="">옵션1</option>
							<option value="">옵션2</option>
							<option value="">옵션3</option>
						</select>
					</div>
					<div class="text-box w120">
						<label for="" class="sr-only">이름</label>
						<input type="text" class="form-control" placeholder="이름">
					</div>
					<div class="text-box w120">
						<label for="" class="sr-only">아이디</label>
						<input type="text" class="form-control" placeholder="아이디">
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
					<button type="button" class="all-btn">
				<span>
					계정수정
				</span>
					</button>
					<button type="button" class="all-btn">
				<span>
					계정삭제
				</span>
					</button>
				</div>
			</form>
			<div class="result-box">
				<ul class="list-title-area has-7item">
					<li class="select">
						<a href="#">
							선택
						</a>
					</li>
					<li class="name">
						<a href="#">
							이름
						</a>
					</li>
					<li class="id">
						<a href="#">
							아이디
						</a>
					</li>
					<li class="authority">
						<a href="#">
							권한
						</a>
					</li>
					<li class="group">
						<a href="#">
							소속
						</a>
					</li>
					<li class="position">
						<a href="#">
							직급
						</a>
					</li>
					<li class="condition">
						<a href="#">
							계정상태
						</a>
					</li>

				</ul>
				<div class="list-wrap">
					<ul class="list-content-area has-7item">
						<li>
							<ul class="list">
								<li class="select">
									<label for=""></label>
									<input type="checkbox">
								</li>
								<li class="name">
									홍길동
								</li>
								<li class="id">
									lorem
								</li>
								<li class="authority">
									<select name="" id="">
										<option value="">프로젝트 총괄</option>
										<option value="">TCK 마스터권한</option>
										<option value="">프로젝트 총괄</option>
										<option value="">프로젝트 운영</option>
									</select>
								</li>
								<li class="group">
									Lorem ipsum
								</li>
								<li class="position">
									Lorem ipsum
								</li>
								<li class="condition">
									활성화
								</li>
							</ul>
						</li>
						<li>
							<ul class="list">
								<li class="select">
									<label for=""></label>
									<input type="checkbox">
								</li>
								<li class="name">
									홍길동
								</li>
								<li class="id">
									lorem
								</li>
								<li class="authority">
									<select name="" id="">
										<option value="">프로젝트 총괄</option>
										<option value="">TCK 마스터권한</option>
										<option value="">프로젝트 총괄</option>
										<option value="">프로젝트 운영</option>
									</select>
								</li>
								<li class="group">
									Lorem ipsum
								</li>
								<li class="position">
									Lorem ipsum
								</li>
								<li class="condition">
									활성화
								</li>
							</ul>
						</li>
						<li>
							<ul class="list">
								<li class="select">
									<label for=""></label>
									<input type="checkbox">
								</li>
								<li class="name">
									홍길동
								</li>
								<li class="id">
									lorem
								</li>
								<li class="authority">
									<select name="" id="">
										<option value="">프로젝트 총괄</option>
										<option value="">TCK 마스터권한</option>
										<option value="">프로젝트 총괄</option>
										<option value="">프로젝트 운영</option>
									</select>
								</li>
								<li class="group">
									Lorem ipsum
								</li>
								<li class="position">
									Lorem ipsum
								</li>
								<li class="condition">
									활성화
								</li>
							</ul>
						</li>
						<li>
							<ul class="list">
								<li class="select">
									<label for=""></label>
									<input type="checkbox">
								</li>
								<li class="name">
									홍길동
								</li>
								<li class="id">
									lorem
								</li>
								<li class="authority">
									<select name="" id="">
										<option value="">프로젝트 총괄</option>
										<option value="">TCK 마스터권한</option>
										<option value="">프로젝트 총괄</option>
										<option value="">프로젝트 운영</option>
									</select>
								</li>
								<li class="group">
									Lorem ipsum
								</li>
								<li class="position">
									Lorem ipsum
								</li>
								<li class="condition">
									활성화
								</li>
							</ul>
						</li>
						<li>
							<ul class="list">
								<li class="select">
									<label for=""></label>
									<input type="checkbox">
								</li>
								<li class="name">
									홍길동
								</li>
								<li class="id">
									lorem
								</li>
								<li class="authority">
									<select name="" id="">
										<option value="">프로젝트 총괄</option>
										<option value="">TCK 마스터권한</option>
										<option value="">프로젝트 총괄</option>
										<option value="">프로젝트 운영</option>
									</select>
								</li>
								<li class="group">
									Lorem ipsum
								</li>
								<li class="position">
									Lorem ipsum
								</li>
								<li class="condition">
									활성화
								</li>
							</ul>
						</li>
						<li>
							<ul class="list">
								<li class="select">
									<label for=""></label>
									<input type="checkbox">
								</li>
								<li class="name">
									홍길동
								</li>
								<li class="id">
									lorem
								</li>
								<li class="authority">
									<select name="" id="">
										<option value="">프로젝트 총괄</option>
										<option value="">TCK 마스터권한</option>
										<option value="">프로젝트 총괄</option>
										<option value="">프로젝트 운영</option>
									</select>
								</li>
								<li class="group">
									Lorem ipsum
								</li>
								<li class="position">
									Lorem ipsum
								</li>
								<li class="condition">
									활성화
								</li>
							</ul>
						</li>
						<li>
							<ul class="list">
								<li class="select">
									<label for=""></label>
									<input type="checkbox">
								</li>
								<li class="name">
									홍길동
								</li>
								<li class="id">
									lorem
								</li>
								<li class="authority">
									<select name="" id="">
										<option value="">프로젝트 총괄</option>
										<option value="">TCK 마스터권한</option>
										<option value="">프로젝트 총괄</option>
										<option value="">프로젝트 운영</option>
									</select>
								</li>
								<li class="group">
									Lorem ipsum
								</li>
								<li class="position">
									Lorem ipsum
								</li>
								<li class="condition">
									활성화
								</li>
							</ul>
						</li>
						<li>
							<ul class="list">
								<li class="select">
									<label for=""></label>
									<input type="checkbox">
								</li>
								<li class="name">
									홍길동
								</li>
								<li class="id">
									lorem
								</li>
								<li class="authority">
									<select name="" id="">
										<option value="">프로젝트 총괄</option>
										<option value="">TCK 마스터권한</option>
										<option value="">프로젝트 총괄</option>
										<option value="">프로젝트 운영</option>
									</select>
								</li>
								<li class="group">
									Lorem ipsum
								</li>
								<li class="position">
									Lorem ipsum
								</li>
								<li class="condition">
									활성화
								</li>
							</ul>
						</li>
						<li>
							<ul class="list">
								<li class="select">
									<label for=""></label>
									<input type="checkbox">
								</li>
								<li class="name">
									홍길동
								</li>
								<li class="id">
									lorem
								</li>
								<li class="authority">
									<select name="" id="">
										<option value="">프로젝트 총괄</option>
										<option value="">TCK 마스터권한</option>
										<option value="">프로젝트 총괄</option>
										<option value="">프로젝트 운영</option>
									</select>
								</li>
								<li class="group">
									Lorem ipsum
								</li>
								<li class="position">
									Lorem ipsum
								</li>
								<li class="condition">
									활성화
								</li>
							</ul>
						</li>
						<li>
							<ul class="list">
								<li class="select">
									<label for=""></label>
									<input type="checkbox">
								</li>
								<li class="name">
									홍길동
								</li>
								<li class="id">
									lorem
								</li>
								<li class="authority">
									<select name="" id="">
										<option value="">프로젝트 총괄</option>
										<option value="">TCK 마스터권한</option>
										<option value="">프로젝트 총괄</option>
										<option value="">프로젝트 운영</option>
									</select>
								</li>
								<li class="group">
									Lorem ipsum
								</li>
								<li class="position">
									Lorem ipsum
								</li>
								<li class="condition">
									활성화
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="btn-group">
					<button type="button" class="up">
						<span class="sr-only">
							Up
						</span>
					</button>
					<button type="button" class="down">
						<span class="sr-only">
							Down
						</span>
					</button>
				</div>
			</div>

			<form action="">
				<div class="search-box">
					<div class="select-box w160">
						<label for="select" class="select-label"><span>회사1 프로젝트1</span></label>
						<select name="" id="select" class="form-control">
							<option value="">회사1 프로젝트1</option>
							<option value="">옵션1</option>
							<option value="">옵션2</option>
							<option value="">옵션3</option>
						</select>
					</div>
				</div>
			</form>
			<div class="result-box">
				<ul class="list-title-area has-7item">
					<li class="select">
						<a href="#">
							선택
						</a>
					</li>
					<li class="name">
						<a href="#">
							이름
						</a>
					</li>
					<li class="id">
						<a href="#">
							아이디
						</a>
					</li>
					<li class="authority">
						<a href="#">
							권한
						</a>
					</li>
					<li class="group">
						<a href="#">
							소속
						</a>
					</li>
					<li class="position">
						<a href="#">
							직급
						</a>
					</li>
					<li class="condition">
						<a href="#">
							계정상태
						</a>
					</li>

				</ul>
				<div class="list-wrap">
					<ul class="list-content-area has-7item">
						<li>
							<ul class="list">
								<li class="select">
									<label for=""></label>
									<input type="checkbox">
								</li>
								<li class="name">
									홍길동
								</li>
								<li class="id">
									lorem
								</li>
								<li class="authority">
									<select name="" id="">
										<option value="">프로젝트 총괄</option>
										<option value="">TCK 마스터권한</option>
										<option value="">프로젝트 총괄</option>
										<option value="">프로젝트 운영</option>
									</select>
								</li>
								<li class="group">
									Lorem ipsum
								</li>
								<li class="position">
									Lorem ipsum
								</li>
								<li class="condition">
									활성화
								</li>
							</ul>
						</li>
						<li>
							<ul class="list">
								<li class="select">
									<label for=""></label>
									<input type="checkbox">
								</li>
								<li class="name">
									홍길동
								</li>
								<li class="id">
									lorem
								</li>
								<li class="authority">
									<select name="" id="">
										<option value="">프로젝트 총괄</option>
										<option value="">TCK 마스터권한</option>
										<option value="">프로젝트 총괄</option>
										<option value="">프로젝트 운영</option>
									</select>
								</li>
								<li class="group">
									Lorem ipsum
								</li>
								<li class="position">
									Lorem ipsum
								</li>
								<li class="condition">
									활성화
								</li>
							</ul>
						</li>
						<li>
							<ul class="list">
								<li class="select">
									<label for=""></label>
									<input type="checkbox">
								</li>
								<li class="name">
									홍길동
								</li>
								<li class="id">
									lorem
								</li>
								<li class="authority">
									<select name="" id="">
										<option value="">프로젝트 총괄</option>
										<option value="">TCK 마스터권한</option>
										<option value="">프로젝트 총괄</option>
										<option value="">프로젝트 운영</option>
									</select>
								</li>
								<li class="group">
									Lorem ipsum
								</li>
								<li class="position">
									Lorem ipsum
								</li>
								<li class="condition">
									활성화
								</li>
							</ul>
						</li>
						<li>
							<ul class="list">
								<li class="select">
									<label for=""></label>
									<input type="checkbox">
								</li>
								<li class="name">
									홍길동
								</li>
								<li class="id">
									lorem
								</li>
								<li class="authority">
									<select name="" id="">
										<option value="">프로젝트 총괄</option>
										<option value="">TCK 마스터권한</option>
										<option value="">프로젝트 총괄</option>
										<option value="">프로젝트 운영</option>
									</select>
								</li>
								<li class="group">
									Lorem ipsum
								</li>
								<li class="position">
									Lorem ipsum
								</li>
								<li class="condition">
									활성화
								</li>
							</ul>
						</li>
						<li>
							<ul class="list">
								<li class="select">
									<label for=""></label>
									<input type="checkbox">
								</li>
								<li class="name">
									홍길동
								</li>
								<li class="id">
									lorem
								</li>
								<li class="authority">
									<select name="" id="">
										<option value="">프로젝트 총괄</option>
										<option value="">TCK 마스터권한</option>
										<option value="">프로젝트 총괄</option>
										<option value="">프로젝트 운영</option>
									</select>
								</li>
								<li class="group">
									Lorem ipsum
								</li>
								<li class="position">
									Lorem ipsum
								</li>
								<li class="condition">
									활성화
								</li>
							</ul>
						</li>
						<li>
							<ul class="list">
								<li class="select">
									<label for=""></label>
									<input type="checkbox">
								</li>
								<li class="name">
									홍길동
								</li>
								<li class="id">
									lorem
								</li>
								<li class="authority">
									<select name="" id="">
										<option value="">프로젝트 총괄</option>
										<option value="">TCK 마스터권한</option>
										<option value="">프로젝트 총괄</option>
										<option value="">프로젝트 운영</option>
									</select>
								</li>
								<li class="group">
									Lorem ipsum
								</li>
								<li class="position">
									Lorem ipsum
								</li>
								<li class="condition">
									활성화
								</li>
							</ul>
						</li>
						<li>
							<ul class="list">
								<li class="select">
									<label for=""></label>
									<input type="checkbox">
								</li>
								<li class="name">
									홍길동
								</li>
								<li class="id">
									lorem
								</li>
								<li class="authority">
									<select name="" id="">
										<option value="">프로젝트 총괄</option>
										<option value="">TCK 마스터권한</option>
										<option value="">프로젝트 총괄</option>
										<option value="">프로젝트 운영</option>
									</select>
								</li>
								<li class="group">
									Lorem ipsum
								</li>
								<li class="position">
									Lorem ipsum
								</li>
								<li class="condition">
									활성화
								</li>
							</ul>
						</li>
						<li>
							<ul class="list">
								<li class="select">
									<label for=""></label>
									<input type="checkbox">
								</li>
								<li class="name">
									홍길동
								</li>
								<li class="id">
									lorem
								</li>
								<li class="authority">
									<select name="" id="">
										<option value="">프로젝트 총괄</option>
										<option value="">TCK 마스터권한</option>
										<option value="">프로젝트 총괄</option>
										<option value="">프로젝트 운영</option>
									</select>
								</li>
								<li class="group">
									Lorem ipsum
								</li>
								<li class="position">
									Lorem ipsum
								</li>
								<li class="condition">
									활성화
								</li>
							</ul>
						</li>
						<li>
							<ul class="list">
								<li class="select">
									<label for=""></label>
									<input type="checkbox">
								</li>
								<li class="name">
									홍길동
								</li>
								<li class="id">
									lorem
								</li>
								<li class="authority">
									<select name="" id="">
										<option value="">프로젝트 총괄</option>
										<option value="">TCK 마스터권한</option>
										<option value="">프로젝트 총괄</option>
										<option value="">프로젝트 운영</option>
									</select>
								</li>
								<li class="group">
									Lorem ipsum
								</li>
								<li class="position">
									Lorem ipsum
								</li>
								<li class="condition">
									활성화
								</li>
							</ul>
						</li>
						<li>
							<ul class="list">
								<li class="select">
									<label for=""></label>
									<input type="checkbox">
								</li>
								<li class="name">
									홍길동
								</li>
								<li class="id">
									lorem
								</li>
								<li class="authority">
									<select name="" id="">
										<option value="">프로젝트 총괄</option>
										<option value="">TCK 마스터권한</option>
										<option value="">프로젝트 총괄</option>
										<option value="">프로젝트 운영</option>
									</select>
								</li>
								<li class="group">
									Lorem ipsum
								</li>
								<li class="position">
									Lorem ipsum
								</li>
								<li class="condition">
									활성화
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="btn-group">
					<button type="button">
						저장
					</button>
				</div>
			</div>


		</div>
	</div>
	<div class="submit-area">
		<button type="submit" class="submit">
			확인
		</button>
	</div>








<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>