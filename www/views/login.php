<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
	<div id="login-wrap">
		<div class="container">

			<div class="login-box">
				<h1 class="logo">
					<a href="#">
						<span class="sr-only">
							TCK 비즈 메시지센터
							<span class="small">
								trans cosmos korea biz message center
							</span>
						</span>
					</a>
				</h1>
				<form action="/view/notice.php" method="post">
					<div class="form-group id">
						<label for="id" class="sr-only">아이디</label>
						<input type="text" name="id" id="id" class="form-control" placeholder="아이디">
					</div>
					<div class="form-group password">
						<label for="password" class="sr-only">비밀번호</label>
						<input type="text" name="password" id="password" class="form-control" placeholder="비밀번호">
					</div>
					<div class="form-group checkbox">
						<div class="col-sm-12">
							<input type="checkbox" id="check-1" class="check-style">
							<label for="check-1">
								<span>아이디 저장</span>
							</label>
						</div>
					</div>
					<div class="submit-box">
						<button type="submit">
					<span class="sr-only">
						로그인
					</span>
						</button>
					</div>
				</form>
			</div>
			<!-- //.login-box -->

			<div class="contact-us">
				<a href="mailTo:master_in@trans-cosmos.co.kr">
					<span>
						불편한 사항이 있으시면 연락바랍니다. 개발운영팀 02-0123-4567 / master_in@trans-cosmos.co.kr
					</span>
				</a>
			</div>
			<div class="copyright">
				<span>ⓒ 2017. transcosmos korea Inc. All rights reserved.</span>
			</div>


		</div>
	</div>

<?php require "part/app-footer.php"; ?>