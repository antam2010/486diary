<template>

    <div class="board">
        <router-link to="/board/view">
            <button class="btn-default">등록</button>
        </router-link>
        <table>
            <caption class="left">게시판</caption>
            <colgroup>
                <col width="10%" />
                <col width="10%" />
                <col width="*" />
                <col width="10%" />
                <col width="10%" />
            </colgroup>
            <tr>
                <td>No</td>
                <td>카테고리</td>
                <td>제목</td>
                <td>등록자</td>
                <td>등록일</td>
            </tr>
            <tr v-for="(irow, i) in list">
                <td>{{ i }}</td>
                <td>{{ irow.board_category }}</td>
                <td>{{ irow.board_title }}</td>
                <td>{{ irow.member_nickname }}</td>
                <td>{{ irow.board_wdate }}</td>
            </tr>
        </table>
    </div>

</template>

<script>
export default {
    props: {},
    data() {
        return {
            info: {
            },
            list: []
        }
    },
    mounted() {
        this.doSearch();
    },
    methods: {
        doSearch() {
            this.axios.get('/board/list', { params: this.info }).then(res => {
                const row = res.data;
                if (row.err === 0) {
                    this.list = res.data.list;
                } else {
                    alert(row.err_msg);
                }

            }).catch(error => {
                console.log(error);
                alert("에러발생!!! 연락바람");
            });
        }

    },
}
</script>



