@extends('layouts.main')

@section('content')
<style>
    body {
        /* font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #eef2f3;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; */
    }
    .container {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
    }
    .circle {
        width: 180px;
        height: 180px;
        background: radial-gradient(circle, #0f2027, #203a43, #2c5364);
        color: white;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 22px;
        font-weight: bold;
        text-align: center;
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
        position: relative;
        z-index: 2;
    }
    .content {
        position: relative;
        width: 100%;
        /* max-width: 1000px; */
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        padding: 20px;
    }
    .content .item {
        width: 40%;
        background: linear-gradient(135deg, #ff758c, #ff7eb3);
        color: white;
        margin: 10px;
        padding: 20px;
        border-radius: 8px;
        text-align: center;
        font-size: 20px;
        font-weight: bold;
        transition: transform 0.3s, box-shadow 0.3s;
        position: relative;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }
    .content .item:nth-child(even) {
        background: linear-gradient(135deg, #17ead9, #6078ea);
    }
    .content .item:hover {
        transform: translateY(-5px);
        box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
    }
    .connector {
        width: 2px;
        height: 50px;
        background: #444;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
    }
</style>
<div class="container">
    <div class="content">
        <div class="item">{{ session('locale') === 'en' ? 'Administrative and Financial Division' : 'الشعبة الإدارية والمالية' }}</div>
        <div class="connector"></div>
        <div class="item">{{ session('locale') === 'en' ? 'Training and Qualification Division' : 'شعبة التدريب والتأهيل' }}</div>
    </div>
    <div class="circle">{{ session('locale') === 'en' ? 'Department Structure' : 'هيكلية القسم' }}</div>
    <div class="content">
        <div class="item">{{ session('locale') === 'en' ? 'Development and Community Service Division' : 'شعبة التطوير وخدمة المجتمع' }}</div>
        <div class="connector"></div>
        <div class="item">{{ session('locale') === 'en' ? 'Ibn Sina E-Learning Division' : 'شعبة ابن سينا للتعليم الإلكتروني' }}</div>
    </div>
</div>
@endsection
