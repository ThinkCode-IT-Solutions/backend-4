<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Products</title>
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
			padding: 32px 20px 48px;
		}

		.intro {
			display: flex;
			justify-content: space-between;
			align-items: flex-end;
			gap: 16px;
			margin-bottom: 28px;
		}

		.intro h1 {
			margin: 0;
			font-size: 28px;
			line-height: 1.2;
		}

		.intro p {
			margin: 8px 0 0;
			color: var(--muted);
			font-size: 15px;
		}

		.intro button {
			border: 1px solid var(--accent);
			background: var(--accent);
			color: #fff;
			padding: 10px 14px;
			border-radius: 10px;
			font-size: 14px;
			cursor: pointer;
			transition: transform 120ms ease, box-shadow 120ms ease;
		}

		.intro button:hover {
			transform: translateY(-1px);
			box-shadow: 0 6px 14px rgba(17, 24, 39, 0.1);
		}

		.grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
			gap: 18px;
		}

		.card {
			background: var(--panel);
			border: 1px solid var(--accent-soft);
			border-radius: 14px;
			padding: 14px;
			display: flex;
			flex-direction: column;
			gap: 12px;
			transition: transform 140ms ease, box-shadow 140ms ease;
		}

		.card:hover {
			transform: translateY(-2px);
			box-shadow: 0 10px 24px rgba(17, 24, 39, 0.08);
		}

		.thumb {
			height: 180px;
			border-radius: 10px;
			background: linear-gradient(135deg, #d7d9e0, #f0f1f5);
			display: grid;
			place-items: center;
			color: var(--muted);
			font-size: 14px;
			letter-spacing: 0.04em;
		}

        .thumb img {

           height: inherit;
            border-radius: 10px;
        }

		.card h3 {
			margin: 0;
			font-size: 16px;
		}

		.price {
			font-weight: 600;
			color: var(--accent);
		}

		.meta {
			display: flex;
			align-items: center;
			gap: 10px;
			color: var(--muted);
			font-size: 13px;
		}

		.pill {
			display: inline-block;
			padding: 6px 9px;
			border-radius: 999px;
			background: var(--accent-soft);
			color: var(--text);
			font-size: 12px;
		}

		@media (max-width: 640px) {
			.intro {
				flex-direction: column;
				align-items: flex-start;
			}
		}
	</style>
</head>
<body>
	<header>
		<div class="brand">Atlas Supply</div>
	</header>

	<main class="page">
		<section class="intro">
			<div>
				<h1>All Products</h1>
				<p>Minimal everyday picks for your workspace and home.</p>
			</div>
			<button type="button">New Arrivals</button>
		</section>

		<section class="grid">

            @foreach($products as $item)


			<article class="card">
				<div class="thumb">
                    <img src="{{ $item->image_url }}" alt="">
                </div>
				<h3>{{ $item->name }}</h3>
				<div class="meta">
					<span class="price">${{ $item->price }}</span>
					<span class="pill">{{ $item->tags }}</span>
				</div>
			</article>

            @endforeach

		</section>
	</main>
</body>
</html>
