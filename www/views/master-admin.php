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
					<div class="text-box w75">
						<label for="" class="sr-only">이름</label>
						<input type="text" class="form-control" placeholder="이름">
					</div>
					<div class="text-box w100">
						<label for="" class="sr-only">아이디</label>
						<input type="text" class="form-control" placeholder="아이디">
					</div>
					<button type="submit" class="submit-btn">
				<span class="sr-only">
					검색버튼
				</span>
					</button>
					<button type="button" class="all-btn" data-toggle="modal" data-target="#creidpopup">
						<span>
					계정생성
				</span>
					</button>
					<button type="button" class="all-btn" data-toggle="modal" data-target="#editpopup">
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
						<label for="">
							<input type="checkbox">
							선택
						</label>
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
					<li class="authority lineup">
						<a href="#">
							권한
						</a>
					</li>
					<li class="group lineup">
						<a href="#">
							소속
						</a>
					</li>
					<li class="position lineup">
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
						<label for="">
							<input type="checkbox">
							선택
						</label>
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
					<li class="authority lineup">
						<a href="#">
							권한
						</a>
					</li>
					<li class="group lineup">
						<a href="#">
							소속
						</a>
					</li>
					<li class="position lineup">
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



<!-- 프로젝트 정보입력 팝업 -->
<div id="inputpopup" role="dialog" class="modal fade input-popup">
	<div class="modal-dialog">
		<div id="detail-popup" class="modal-content">
			<h2 class="sr-only">
				팝업창
			</h2>
			<div class="head">
				<h3 class=" title">
					프로젝트 정보입력
				</h3>
				<a href="#" class="close-popup" data-dismiss="modal">
					<span class="sr-only">
						팝업 닫기
					</span>
				</a>
			</div>
			<div class="cont">
				<div class="cont-box">
					<form action="">
						<div class="form-group">
							<div class="col-xs-3 label-box">
								<label for="">발신프로필 UUID</label>
							</div>
							<div class="col-xs-9 input-box">
								<div class="col-xs-8">
									<input type="text" class="form-control">
								</div>
								<div class="col-xs-4 pre">
									<button type="button">중복확인</button>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-3 label-box">
								<label for="">발신프로필</label>
							</div>
							<div class="col-xs-9 input-box">
								<div class="col-xs-8">
									<input type="text" class="form-control">
								</div>
								<div class="col-xs-4 pre">

								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-3 label-box">
								<label for="">발신 프로필키</label>
							</div>
							<div class="col-xs-9 input-box">
								<div class="col-xs-8">
									<input type="text" class="form-control">
								</div>
								<div class="col-xs-4 pre">
									(sender key)
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-3 label-box">
								<label for="">과금 단가</label>
							</div>
							<div class="col-xs-9 input-box">
								<div class="col-xs-8">
									<input type="text" class="form-control" placeholder="0~99,999,999">
								</div>
								<div class="col-xs-4 pre">
									원
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-3 label-box">
								<label for="">최소 과금 세션 (월)</label>
							</div>
							<div class="col-xs-9 input-box">
								<div class="col-xs-8">
									<input type="text" class="form-control" placeholder="0~99,999,999">
								</div>
								<div class="col-xs-4 pre">
									개   (99,999,999 원)
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-3 label-box">
								<label for="">API URL</label>
							</div>
							<div class="col-xs-9 input-box">
								<input type="text" class="form-control" placeholder="">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-3 label-box">
								<label for="">select</label>
							</div>
							<div class="col-xs-9 input-box">
								<div class="col-xs-8">
									<select name="" id="" class="form-control">
										<option value="">option</option>
										<option value="">option1</option>
										<option value="">option2</option>
									</select>
								</div>
								<div class="col-xs-4 pre">

								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="submit-area">
					<button type="submit" class="submit">
						확인
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //팝업 -->

<!-- 계정 생성 팝업 -->
<div id="creidpopup" role="dialog" class="modal fade input-popup">
	<div class="modal-dialog">
		<div id="detail-popup" class="modal-content">
			<h2 class="sr-only">
				팝업창
			</h2>
			<div class="head">
				<h3 class=" title">
					계정 생성
				</h3>
				<a href="#" class="close-popup" data-dismiss="modal">
					<span class="sr-only">
						팝업 닫기
					</span>
				</a>
			</div>
			<div class="cont">
				<div class="cont-box">
					<form action="">
						<div class="form-group">
							<div class="col-xs-3 label-box">
								<label for="">ID</label>
							</div>
							<div class="col-xs-9 input-box">
								<div class="col-xs-8">
									<input type="text" class="form-control">
								</div>
								<div class="col-xs-4 pre">
									<button type="button">중복확인</button>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-3 label-box">
								<label for="">이름</label>
							</div>
							<div class="col-xs-9 input-box">
								<div class="col-xs-8">
									<input type="text" class="form-control">
								</div>
								<div class="col-xs-4 pre">

								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-3 label-box">
								<label for="">전화번호</label>
							</div>
							<div class="col-xs-9 input-box">
								<div class="col-xs-8">
									<input type="text" class="form-control">
								</div>
								<div class="col-xs-4 pre">
									
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-3 label-box">
								<label for="">이메일</label>
							</div>
							<div class="col-xs-9 input-box">
								<div class="col-xs-8">
									<input type="text" class="form-control">
								</div>
								<div class="col-xs-4 pre">

								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-3 label-box">
								<label for="">직급</label>
							</div>
							<div class="col-xs-9 input-box">
								<div class="col-xs-8">
									<input type="text" class="form-control">
								</div>
								<div class="col-xs-4 pre">

								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="submit-area">
					<button type="submit" class="submit">
						계정생성
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //팝업 -->

<!-- 계정 수정 팝업 -->
<div id="editpopup" role="dialog" class="modal fade input-popup">
	<div class="modal-dialog">
		<div id="detail-popup" class="modal-content">
			<h2 class="sr-only">
				팝업창
			</h2>
			<div class="head">
				<h3 class=" title">
					계정 수정
				</h3>
				<a href="#" class="close-popup" data-dismiss="modal">
					<span class="sr-only">
						팝업 닫기
					</span>
				</a>
			</div>
			<div class="cont">
				<div class="cont-box">
					<form action="">
						<div class="form-group">
							<div class="col-xs-3 label-box">
								<label for="">ID</label>
							</div>
							<div class="col-xs-9 input-box">
								<div class="col-xs-8">
									<span>kkkk</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-3 label-box">
								<label for="">이름</label>
							</div>
							<div class="col-xs-9 input-box">
								<div class="col-xs-8">
									<input type="text" value="김oo" class="form-control">
								</div>
								<div class="col-xs-4 pre">

								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-3 label-box">
								<label for="">전화번호</label>
							</div>
							<div class="col-xs-9 input-box">
								<div class="col-xs-8">
									<input type="text" value="010-1234-1234" class="form-control">
								</div>
								<div class="col-xs-4 pre">

								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-3 label-box">
								<label for="">이메일</label>
							</div>
							<div class="col-xs-9 input-box">
								<div class="col-xs-8">
									<input type="email" value="email@domain.com" class="form-control">
								</div>
								<div class="col-xs-4 pre">

								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-3 label-box">
								<label for="">직급</label>
							</div>
							<div class="col-xs-9 input-box">
								<div class="col-xs-8">
									<input type="text" value="팀장" class="form-control">
								</div>
								<div class="col-xs-4 pre">

								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-3 label-box">
								<label for="">비밀번호 오류횟수</label>
							</div>
							<div class="col-xs-9 input-box">
								<div class="col-xs-8">
									<span class="count">0</span>회
									<button type="button">비밀번호 초기화</button>
								</div>
								<div class="col-xs-4 pre">

								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="submit-area">
					<button type="submit" class="submit">
						저장
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //팝업 -->