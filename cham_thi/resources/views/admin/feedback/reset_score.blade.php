@include('admin.feedback.header')
<div style="text-align: center">
    <form action="{{ route('diem.confirm_reset_all') }}" method="POST">
        @csrf
        <button type="submit" style="margin-top: 60px" class="btn btn-primary" onclick="confirm('bạn chắc chứ ?')">RESET
            ALL SCORE</button>

    </form>
</div>
