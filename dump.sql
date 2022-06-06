--
-- PostgreSQL database dump
--

-- Dumped from database version 13.7
-- Dumped by pg_dump version 14.2

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Data for Name: conference; Type: TABLE DATA; Schema: public; Owner: symfony
--

COPY public.conference (id, city, year, is_international) FROM stdin;
4	Moscow	2022	t
5	London	2023	t
6	Mexico	2024	f
\.


--
-- Data for Name: comment; Type: TABLE DATA; Schema: public; Owner: symfony
--

COPY public.comment (id, conference_id, author, text, email, create_at, photo_filename) FROM stdin;
4	4	dyhmzall	very nice!	dyhmzall@gmail.com	2022-06-06 14:32:00	\N
5	5	Nicklback	bad, very bad	nick@gmail.com	2022-06-03 14:32:00	\N
\.


--
-- Data for Name: doctrine_migration_versions; Type: TABLE DATA; Schema: public; Owner: symfony
--

COPY public.doctrine_migration_versions (version, executed_at, execution_time) FROM stdin;
DoctrineMigrations\\Version20220606111342	2022-06-06 11:13:53	52
\.


--
-- Data for Name: messenger_messages; Type: TABLE DATA; Schema: public; Owner: symfony
--

COPY public.messenger_messages (id, body, headers, queue_name, created_at, available_at, delivered_at) FROM stdin;
\.


--
-- Data for Name: status; Type: TABLE DATA; Schema: public; Owner: symfony
--

COPY public.status (id, title) FROM stdin;
1	new
2	active
3	close
\.


--
-- Data for Name: task; Type: TABLE DATA; Schema: public; Owner: symfony
--

COPY public.task (id, status_id, title, url) FROM stdin;
2	1	Тестовая задача	https://dyhmzall.com/
\.


--
-- Name: comment_id_seq; Type: SEQUENCE SET; Schema: public; Owner: symfony
--

SELECT pg_catalog.setval('public.comment_id_seq', 5, true);


--
-- Name: conference_id_seq; Type: SEQUENCE SET; Schema: public; Owner: symfony
--

SELECT pg_catalog.setval('public.conference_id_seq', 6, true);


--
-- Name: messenger_messages_id_seq; Type: SEQUENCE SET; Schema: public; Owner: symfony
--

SELECT pg_catalog.setval('public.messenger_messages_id_seq', 1, false);


--
-- Name: status_id_seq; Type: SEQUENCE SET; Schema: public; Owner: symfony
--

SELECT pg_catalog.setval('public.status_id_seq', 3, true);


--
-- Name: task_id_seq; Type: SEQUENCE SET; Schema: public; Owner: symfony
--

SELECT pg_catalog.setval('public.task_id_seq', 2, true);


--
-- PostgreSQL database dump complete
--

