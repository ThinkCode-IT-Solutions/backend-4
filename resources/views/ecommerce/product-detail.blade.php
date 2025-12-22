<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product Detail</title>
	<style>
		:root {
			--bg: #f7f7f5;
			--panel: #ffffff;
			--text: #1f1f1a;
			--muted: #6f6f66;
			--accent: #111827;
			--accent-soft: #e6e7ec;
		}

		* { box-sizing: border-box; }
		body {
			margin: 0;
			font-family: "Helvetica Neue", Arial, sans-serif;
			color: var(--text);
			background: var(--bg);
		}

		header {
			position: sticky;
			top: 0;
			backdrop-filter: blur(8px);
			background: rgba(247, 247, 245, 0.9);
			border-bottom: 1px solid var(--accent-soft);
			padding: 16px 20px;
		}

		.brand {
			font-size: 18px;
			font-weight: 600;
			letter-spacing: 0.02em;
		}

		.page {
			max-width: 1120px;
			margin: 0 auto;
			padding: 32px 20px 56px;
		}

		.crumbs {
			display: inline-flex;
			align-items: center;
			gap: 8px;
			font-size: 14px;
			color: var(--muted);
			margin-bottom: 20px;
		}

		.crumbs a {
			color: var(--accent);
			text-decoration: none;
		}

		.layout {
			display: grid;
			grid-template-columns: minmax(0, 1fr) minmax(320px, 380px);
			gap: 28px;
			align-items: start;
		}

		.media {
			background: linear-gradient(135deg, #dfe3ed, #f5f6fb);
			border: 1px solid var(--accent-soft);
			border-radius: 16px;
			min-height: 420px;
			display: grid;
			place-items: center;
			color: var(--muted);
			font-size: 15px;
			letter-spacing: 0.06em;
		}

		.panel {
			background: var(--panel);
			border: 1px solid var(--accent-soft);
			border-radius: 16px;
			padding: 20px;
			display: flex;
			flex-direction: column;
			gap: 14px;
		}

		h1 {
			margin: 0;
			font-size: 26px;
		}

		.price {
			font-size: 20px;
			font-weight: 600;
			color: var(--accent);
		}

		.desc {
			color: var(--muted);
			line-height: 1.6;
			font-size: 15px;
		}

		.pill-row {
			display: flex;
			gap: 8px;
			flex-wrap: wrap;
		}

		.pill {
			padding: 7px 10px;
			border-radius: 999px;
			background: var(--accent-soft);
			color: var(--text);
			font-size: 12px;
		}

		.actions {
			display: flex;
			gap: 10px;
			flex-wrap: wrap;
		}

		.btn {
			border: 1px solid var(--accent);
			padding: 11px 14px;
			border-radius: 10px;
			font-size: 14px;
			cursor: pointer;
			transition: transform 120ms ease, box-shadow 120ms ease;
		}

		.btn-primary {
			background: var(--accent);
			color: #fff;
		}

		.btn-secondary {
			background: #fff;
			color: var(--accent);
		}

		.btn:hover {
			transform: translateY(-1px);
			box-shadow: 0 6px 14px rgba(17, 24, 39, 0.1);
		}

		.section {
			margin-top: 26px;
		}

		.section h2 {
			margin: 0 0 10px;
			font-size: 18px;
		}

		.list {
			padding: 0;
			margin: 0;
			list-style: none;
			display: grid;
			gap: 8px;
		}

		.list li {
			padding: 12px;
			border: 1px solid var(--accent-soft);
			border-radius: 10px;
			background: #fff;
			color: var(--muted);
			font-size: 14px;
		}

		@media (max-width: 960px) {
			.layout {
				grid-template-columns: 1fr;
			}
		}
	</style>
</head>
<body>
	<header>
		<div class="brand">Atlas Supply</div>
	</header>

	<main class="page">
		<div class="crumbs">
			<a href="#">All Products</a>
			<span>/</span>
			<span>Stoneware Mug</span>
		</div>

		<section class="layout">
			<div class="media">Product Preview</div>

			<div class="panel">
				<h1>Stoneware Mug</h1>
				<div class="price">$22</div>
				<p class="desc">A hand-finished stoneware mug with a smooth matte glaze and comfortable rounded handle. Sized for slow coffee rituals and everyday desk use.</p>

				<div class="pill-row">
					<span class="pill">Kitchen</span>
					<span class="pill">12 oz</span>
					<span class="pill">Dishwasher Safe</span>
				</div>

				<div class="actions">
					<button class="btn btn-primary" type="button">Add to Bag</button>
					<button class="btn btn-secondary" type="button">Save for Later</button>
				</div>
			</div>
		</section>

		{{-- <section class="section">
			<h2>Details</h2>
			<ul class="list">
				<li>Material: Glazed stoneware with subtle speckle.</li>
				<li>Capacity: Holds a full 12 oz pour.</li>
				<li>Care: Dishwasher and microwave safe.</li>
				<li>Finish: Satin exterior with gloss interior for easy rinsing.</li>
			</ul>
		</section>

		<section class="section">
			<h2>Care Tips</h2>
			<ul class="list">
				<li>Rinse after use to prevent coffee oils from staining.</li>
				<li>Avoid abrasive scrubbers to maintain the satin finish.</li>
				<li>Let it air dry fully before storing with nested pieces.</li>
			</ul>
		</section> --}}
	</main>
</body>
</html>
