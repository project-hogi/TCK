<div class="section">
	<?php if(getDepthId($pagePath, 0) == "sub"){ ?>

		<h2 class="section-title">
			<span class="icon icon-this"></span>
			프로젝트 조회하기
		</h2>

	<?php }else if(getDepthId($pagePath, 0) == "notice"){ ?>

		<h2 class="section-title">
			<span class="icon icon-this"></span>
			공지사항
		</h2>

	<?php }else if(getDepthId($pagePath, 0) == "master"){ ?>

		<h2 class="section-title">
			<span class="icon icon-this"></span>
			조직 및 계정 관리
		</h2>

	<?php } ?>
	<div id="content">
