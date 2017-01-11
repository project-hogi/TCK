<div class="section">
	<?php if(getDepthId($pagePath, 0) == "setting"){ ?>

		<?php if(getDepthId($pagePath, 1) == "1"){ ?>
			<h2 class="section-title">
				<span class="icon icon-this"></span>
				상담 운영 설정
			</h2>
		<?php }else if(getDepthId($pagePath, 1) == "2"){ ?>
			<h2 class="section-title">
				<span class="icon icon-this"></span>
				챗봇 설정
			</h2>
		<?php }else if(getDepthId($pagePath, 1) == "3"){ ?>
			<h2 class="section-title">
				<span class="icon icon-this"></span>
				과금 보기
			</h2>
		<?php } ?>

	<?php }else if(getDepthId($pagePath, 0) == "notice"){ ?>

		<h2 class="section-title">
			<span class="icon icon-this"></span>
			공지사항
		</h2>
	<?php }else if(getDepthId($pagePath, 0) == "notice"){ ?>

		<h2 class="section-title">
			<span class="icon icon-this"></span>
			공지사항
		</h2>
	<?php }else if(getDepthId($pagePath, 0) == "notice"){ ?>

		<h2 class="section-title">
			<span class="icon icon-this"></span>
			공지사항
		</h2>
	<?php }else if(getDepthId($pagePath, 0) == "master"){ ?>
		<?php if(getDepthId($pagePath, 1) == "admin"){ ?>
			<h2 class="section-title">
				<span class="icon icon-this"></span>
				조직 및 계정 관리
			</h2>
		<?php }else if(getDepthId($pagePath, 1) == "notice"){ ?>
			<h2 class="section-title">
				<span class="icon icon-this"></span>
				공지사항
			</h2>
		<?php } ?>
	<?php } ?>
	<div id="content">