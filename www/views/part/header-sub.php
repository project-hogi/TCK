<div class="section">
	<?php if(getDepthId($pagePath, 0) == "index"){ ?>
		<h2 class="section-title">
			<span class="icon icon-this"></span>
			공지사항
		</h2>
	<?php }else if(getDepthId($pagePath, 0) == "setting"){ ?>
		<h2 class="section-title">
			<span class="icon icon-this"></span>
			운영 설정
		</h2>
	<?php }else if(getDepthId($pagePath, 0) == "bill"){ ?>
		<h2 class="section-title">
			<span class="icon icon-this"></span>
			과금 내역
		</h2>
	<?php }else if(getDepthId($pagePath, 0) == "stats"){ ?>
		<?php if(getDepthId($pagePath, 1) == "stats"){ ?>
			<h2 class="section-title">
				<span class="icon icon-this"></span>
				통계
			</h2>
		<?php }else if(getDepthId($pagePath, 1) == "dashboard"){ ?>
			<h2 class="section-title">
				<span class="icon icon-this"></span>
				대시보드
			</h2>
		<?php } ?>
	<?php }else if(getDepthId($pagePath, 0) == "rawdate"){ ?>
		<?php if(getDepthId($pagePath, 1) == "1"){ ?>
			<h2 class="section-title">
				<span class="icon icon-this"></span>
				데이터 보관
			</h2>
		<?php }else if(getDepthId($pagePath, 1) == "2"){ ?>
			<h2 class="section-title">
				<span class="icon icon-this"></span>
				Rawdata
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