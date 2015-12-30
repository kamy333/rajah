DROP VIEW IF EXISTS mycigarette_view_by_day;
CREATE VIEW mycigarette_view_by_day AS (
  SELECT
    year(cig_date) As year,monthname(cig_date) AS month, cig_date AS date,sum(number_cig) As total

  FROM mycigarette
  GROUP BY  cig_date DESC
);




DROP VIEW IF EXISTS mycigarette_view_by_month;
CREATE VIEW mycigarette_view_by_month AS (
  SELECT
    year(cig_date)as year,month(cig_date)as monthno, CONCAT_WS(' ', monthname(cig_date),year(cig_date)) AS month, sum(number_cig)as total

  FROM mycigarette as c
  GROUP BY year DESC,month DESC


);



DROP VIEW IF EXISTS mycigarette_view_by_year;
CREATE VIEW mycigarette_view_by_year AS (
  SELECT
    year(cig_date) as year,sum(number_cig)as total

  FROM mycigarette
  GROUP BY  year(cig_date)
);

SELECT * FROM mycigarette_view_by_day;
SELECT * FROM mycigarette_view_by_month;
SELECT * FROM mycigarette_view_by_year;