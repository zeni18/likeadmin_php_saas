<template>
  <view class="container">
    <!-- 顶部搜索栏 -->
    <view class="search-bar">
      <input type="text" placeholder="搜索内容" />
    </view>

    <!-- 顶部banner -->
    <view class="banner">
      <image src="/static/banner.png" mode="widthFix" />
    </view>

    <!-- 排行榜部分 -->
    <view class="rank-section">
      <view class="rank-list">
        <view class="rank-item" v-for="(item, index) in rankList" :key="index">
          <image :src="item.avatar" mode="aspectFill" />
          <view class="crown" v-if="index < 3">
            <image :src="`/static/crown${index + 1}.png`" mode="aspectFill" />
          </view>
        </view>
      </view>
    </view>

    <!-- 系统通知 -->
    <view class="notice">
      <text>收到了某人打赏20金豆</text>
    </view>

    <!-- 新人推荐 -->
    <view class="new-users">
      <view class="section-title">新人推荐</view>
      <scroll-view scroll-x class="user-scroll">
        <view class="user-item" v-for="(user, index) in newUsers" :key="index">
          <image :src="user.avatar" mode="aspectFill" />
        </view>
      </scroll-view>
    </view>

    <!-- 用户列表 -->
    <view class="user-list">
      <view class="user-card" v-for="(user, index) in userList" :key="index">
        <view class="user-info">
          <image :src="user.avatar" mode="aspectFill" />
          <view class="info-right">
            <view class="name">{{user.name}}</view>
            <view class="location">{{user.location}}</view>
          </view>
        </view>
        <view class="tags">
          <text v-for="(tag, idx) in user.tags" :key="idx">#{{tag}}</text>
        </view>
      </view>
    </view>

    <!-- 底部导航栏 -->
    <view class="tab-bar">
      <view class="tab-item" v-for="(tab, index) in tabs" :key="index">
        <image :src="tab.icon" mode="aspectFit" />
        <text>{{tab.name}}</text>
      </view>
    </view>
  </view>
</template>

<script>
import { Button } from '@/components/ui/button'
export default {
  components: {
  },
  data() {
    return {
      rankList: [
        { avatar: '/static/avatar1.png' },
        { avatar: '/static/avatar2.png' },
        { avatar: '/static/avatar3.png' },
      ],
      newUsers: [
        { avatar: '/static/new1.png' },
        { avatar: '/static/new2.png' },
        { avatar: '/static/new3.png' },
        { avatar: '/static/new4.png' },
      ],
    userList: [
        {
          avatar: '/static/user1.png',
          name: '山禾',
          location: '江苏',
          tags: ['游戏', '二次元', '动漫']
        },
        {
          avatar: '/static/user2.png',
          name: '可可',
          location: '山东',
          tags: ['舞蹈', '音乐', '直播']
        },
      ],
      tabs: [
        { icon: '/static/tab1.png', name: '在线聊天' },
        { icon: '/static/tab2.png', name: '恋人下载' },
        { icon: '/static/tab3.png', name: '随机匹配' },
        { icon: '/static/tab4.png', name: '动态广场' },
        { icon: '/static/tab5.png', name: '我的' },
      ]
    }
  }
}
</script>

<style lang="scss">
.container {
  min-height: 100vh;
  background-color: #f8f8f8;
}

.search-bar {
  padding: 20rpx;
  background: #fff;
  input {
    background: #f5f5f5;
    padding: 10rpx 20rpx;
    border-radius: 30rpx;
  }
}

.banner {
  width: 100%;
  image {
    width: 100%;
  }
}

.rank-section {
  padding: 20rpx;
  .rank-list {
    display: flex;
    justify-content: center;
    gap: 30rpx;
    .rank-item {
      position: relative;
      width: 100rpx;
      height: 100rpx;
      image {
        width: 100%;
        height: 100%;
        border-radius: 50%;
      }
      .crown {
        position: absolute;
        top: -20rpx;
        left: 50%;
        transform: translateX(-50%);
        width: 40rpx;
        height: 40rpx;
      }
    }
  }
}

.notice {
  margin: 20rpx;
  padding: 10rpx 20rpx;
  background: rgba(0,0,0,0.1);
  border-radius: 30rpx;
}

.new-users {
  padding: 20rpx;
  .section-title {
    margin-bottom: 20rpx;
    font-weight: bold;
  }
  .user-scroll {
    white-space: nowrap;
    .user-item {
      display: inline-block;
      margin-right: 20rpx;
      width: 120rpx;
      height: 120rpx;
      image {
        width: 100%;
        height: 100%;
        border-radius: 10rpx;
      }
    }
  }
}

.user-list {
  padding: 20rpx;
  .user-card {
    background: #fff;
    border-radius: 20rpx;
    padding: 20rpx;
    margin-bottom: 20rpx;
    .user-info {
      display: flex;
      align-items: center;
      image {
        width: 100rpx;
        height: 100rpx;
        border-radius: 10rpx;
        margin-right: 20rpx;
      }
      .info-right {
        .name {
          font-weight: bold;
        }
        .location {
          font-size: 24rpx;
          color: #666;
        }
      }
    }
    .tags {
      margin-top: 10rpx;
      text {
        font-size: 24rpx;
        color: #666;
        margin-right: 10rpx;
      }
    }
  }
}

.tab-bar {
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100rpx;
  background: #fff;
  display: flex;
  justify-content: space-around;
  align-items: center;
  border-top: 1rpx solid #eee;
  .tab-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    image {
      width: 40rpx;
      height: 40rpx;
      margin-bottom: 6rpx;
    }
    text {
      font-size: 20rpx;
    }
  }
}
</style>
