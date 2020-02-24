/**
 * Run all tests
 * code sample:
 * https://github.com/redis/hiredis/blob/master/test.c
 */
#include "gtest/gtest.h"
#include "glog/logging.h"
#include "gflags/gflags.h"

/**
 * Main Function to Collect all testcase
 */
int main(int argc, char *argv[]) {
  ::testing::InitGoogleTest(&argc, argv);
  gflags::ParseCommandLineFlags(&argc, &argv, true);
  return RUN_ALL_TESTS();
}
